#/usr/bin/python3

from bs4 import BeautifulSoup
import urllib.request, pdb, sys, random

SF2_PIC = [
    'https://www.vgmaps.com/Atlas/Genesis/ShiningForceII-World.png',
]

def DoHttp(url=''):
    with urllib.request.urlopen(url) as f:
        ret = f.read()
        return ret.decode('utf-8')
    return None

def SelectPic(url):
    c = DoHttp(url)
    if c == None:
        sys.exit()
    soup = BeautifulSoup(c, "html.parser")
    soup.prettify()
    elements_div = soup.td.findAll('div')
    for div in elements_div:
        if div.table and div.table.a and div.table.a.attrs and div.table.a.attrs['name']:
            print(div.table.a.attrs['name'])
            if div.table.a.attrs['name'] != 'ShiningForceII':
                continue

            tr_list = div.table.findAll('tr')
            if len(tr_list) > 2:
                tr_list = tr_list[2:]
            else:
                continue
            pic_url = tr_list[random.randrange(len(tr_list)-1)]
            print(pic_url.a.attrs['href'])
            return pic_url.a.attrs['href']

def Update(url):
    f = open('README.md','r+')
    old = f.read()
    f.seek(0)
    f.write('<img decoding="async" src="{0}" width="50%" alt="what??">'.format(url))
    f.write(old)
    f.close()


def run():
    #name, url = constants.PickRandomURL()
    base_url = 'https://www.vgmaps.com/Atlas/Genesis/'
    pic = SelectPic(base_url + 'index.htm')
    if pic:
        pic = base_url + pic
    Update(pic)

if __name__ == '__main__':
    run()
