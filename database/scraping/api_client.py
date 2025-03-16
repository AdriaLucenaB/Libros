import requests

def enviar_precio(isbn, url, ecommerce, status, price):
    api_url = 'https://tu-sitio-web.com/api'  # Reemplaza por tu URL real

    params = {
        'EAN13': isbn,
        'url': url,
        'ecommerce': ecommerce,
        'status': status,
        'price': price,
    }

    response = requests.post(api_url, json=params)

    if response.status_code == 200:
        print("Datos enviados correctamente:", response.json())
    else:
        print(f"Error en la petición: {response.status_code}")
