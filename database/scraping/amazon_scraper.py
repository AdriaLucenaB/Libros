import sys
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.common.exceptions import NoSuchElementException
import time
from api_client import enviar_precio

def buscar_precio_libro(isbn):
    driver = webdriver.Firefox()
    driver.get("https://www.amazon.es/s?k=" + isbn)
    time.sleep(2)

    try:
        mensaje_no_resultados = driver.find_element(By.XPATH, "//*[contains(text(), 'No hay resultados para')]")
        print("No hay resultados para la búsqueda.")
    except NoSuchElementException:
        try:
            enlace_producto = driver.find_elements(By.CSS_SELECTOR, 'span.a-offscreen')[0]
            precio = enlace_producto.get_attribute('innerHTML').replace('&nbsp;', '').replace('€', '').strip()
            print(f"Precio producto: {precio}")

            # Enviar al backend
            enviar_precio(
                isbn=isbn,
                url=f"https://www.amazon.es/s?k={isbn}",
                ecommerce='amazon',
                status='available',
                price=float(precio.replace(',', '.'))
            )
        except IndexError:
            print("No se pudo encontrar el precio del producto.")
    time.sleep(2)
    driver.quit()

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Debe proporcionar un ISBN como argumento")
    else:
        isbn = sys.argv[1]
        buscar_precio_libro(isbn)
