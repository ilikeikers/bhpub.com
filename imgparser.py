import os
import json
import requests
import urllib.request
from selenium import webdriver 
from selenium.webdriver.chrome.options import Options

options = Options()
options.headless = True
options.add_argument("--window-size=1920,1200")

DRIVERPATH = '/usr/bin/chromedriver' 
BROWSER = webdriver.Chrome(options=options, executable_path=DRIVERPATH)
URL = "https://www.facebook.com/pg/BraveheartsPub/photos/?tab=album&album_id=10151198258592547&ref=page_internal"
SAVE_FOLDER = "slideshow"

def main():
    if not os.path.exists(SAVE_FOLDER):
            os.mkdir(SAVE_FOLDER)
    download_images()

def download_images():
    counter = 0
    n_images = 10
    
    BROWSER.get(URL)
    BROWSER.implicitly_wait(3)
    divs = BROWSER.find_elements_by_class_name('_2eea')
   
    for div in divs:
        if counter < n_images:
            image = div.find_element_by_tag_name('img')
            filename = SAVE_FOLDER + "/slide_" + str(counter) + ".jpg"
            image_src = image.get_attribute('src')
            urllib.request.urlretrieve(image_src, filename=filename)
            print(image_src)
        counter = counter + 1

if __name__ == '__main__':
    main()

