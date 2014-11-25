CSE360Project
=============

CSE360 Project(Image Storeage)

(View in RAW format)

Image Storage:

The code above emulates the depiction of localweb C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb It does not compile within an HTML. Follow the steps below to make it run.

https://cloud.githubusercontent.com/assets/9562542/4962882/5173619a-66ed-11e4-8fc5-4734991557df.png https://cloud.githubusercontent.com/assets/9562542/4962886/868b7796-66ed-11e4-8648-00f16f4ef062.png

Download EasyPHP Webserver http://www.easyphp.org/save-easyphp-webserver-latest.php?d=direct Download EasyPHP Devserver http://www.easyphp.org/save-easyphp-devservervc11-latest.php?d=direct

Download Lychee https://github.com/electerious/Lychee/archive/master.zip

Unzip Lychee-master.zip

Open EasyPHP Webserver and EasyPHP Devserver

Right click on EasyPHP Devserver on the icon in the taskbar Click on Explore Drag the contents of Lychee-master.zip into /localweb

Right click on EasyPHP Devserver on the icon in the taskbar again Click on Administration Under Modules, click "Open"

Right click on EasyPHP Devserver on the icon in the taskbar again Click on LocalWeb Click on Lychee-master/ When first starting Lychee, input Username ("root") and Password (left empty) and press enter. The database in then built automatically.

Donwload Piwigo's NetInstall http://piwigo.org/download/dlcounter.php?code=netinstall Right click on EasyPHP Devserver on the icon in the taskbar Click on Explore Place piwigo-netinstall in the scripts folder

Right click on EasyPHP Devserver on the icon in the taskbar again Click on LocalWeb Click on the "scripts" folder Click on "piwigo-netinstall"

The script will now automatically download Piwigo

You will now need to fill out the connection settings:

Host: localhost Username: root Password: (left blank) Database name: lychee

Lastly, you need to create a username and password for the webmaster.

You will then be taken to the Piwigo administration page. You can add photos on the lefthand side.

To go to the gallery, click "Visit the Gallery" on the top toolbar.

In the gallery, guests can sign up to create accounts.

Initially, new members can only view the gallery (if the webmaster or admins has uploaded anything) and comment.

Things to work on: -upon loggin in as a normal user, including an extra tab called "add image", allowing the user to upload
images without having to be promoted to "admin". 
