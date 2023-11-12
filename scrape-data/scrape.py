import requests
from bs4 import BeautifulSoup

url = 'https://www.investing.com/equities/apple-computer-inc-historical-data'
payload = {'flex-1': 'Monthly'}
page = requests.get(url, params=payload)


soup = BeautifulSoup(page.text, 'html.parser')

company = soup.find('h1', {'text-xl text-left font-bold leading-7 md:text-3xl md:leading-8 mb-2.5 md:mb-2 text-[#232526] rtl:soft-ltr'}).text
price = soup.find('td', {'datatable_cell__LJp3C datatable_cell--align-end__qgxDQ datatable_cell--up__hIuZF text-right text-sm font-normal leading-5 align-middle min-w-[77px] rtl:text-right text-[#007C32]'}).text
price1y = soup.find('td', {'datatable_cell__LJp3C datatable_cell--align-end__qgxDQ datatable_cell--down___c4Fq text-right text-sm font-normal leading-5 align-middle min-w-[77px] rtl:text-right text-[#D91400]'}).text
print(company, price, price1y)