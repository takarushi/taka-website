# How to translate sites!
By Ryosuke Takarushi - [taka@intellivoid.info](mailto:taka@intellivoid.info)
## Translating our sites it's quite easy, and this guide will show you how!

Requirements
- Git client for your platform (Git for Windows, GitHub Desktop, etc)

- Text editor that can handle Markdown & JSON (Visual Studio Code, Sublime Text, etc)

------------------------------------------


![GithubRepo](https://i.imgur.com/F2FAV5p.png)
###### First of all, we'll need to clone the repo on your local machine, the next section will show you how, using GitHub Desktop (steps may vary depending on your Git client)
--------------------------------------------
![Clone](https://i.imgur.com/YyWzOBi.png)
##### Now, you should click that button to clone it
------------------------------------------------
![Repolist](https://i.imgur.com/rEs5vfK.png)
##### Your repository list should look like this
----------------------------------------------
## Now, it's time to launch your favourite text editor (like the ones mentioned at the start of this article) and start working
----------------------------------------------
![openblu](https://i.imgur.com/p4iMJLa.png)
##### Inside the OpenBlu Web Application folder, you'll find these folders, i'll start talking about them now
-------------------------------------------------
![languages](https://i.imgur.com/PrpToo0.png)
##### The JSON folder contains these files
-------------------------------------------------
So, to add an new language to the dashboard, you'll need to copy the en.json file and rename it using the ISO 639-1 name scheme

### Let's put it in a example, if your language is Russian, the file would be called ``ru.json``, it's pretty simple!
---------------------------------------------------
![code](https://i.imgur.com/s6G0EfD.png)
##### Notice the language string on the top, you'll need to replace it using the complete name of the language (in this screenshot, Spanish) and it's ISO 639-1 name (es)
---------------------------------------------------
### **Remember: do not remove the %s or $%s parts on the strings, because these numbers are filled dynamically when they're loaded in the application, the removal of these may have unintended side effects**
---------------------------------------------------
---------------------------------------------------
You may have also noticed a ``md`` subfolder on the ``OpenBlu Web Application`` parent folder, we're 
going to talk about it right now

--------------------------------------------------
![About](https://i.imgur.com/XW1s0l3.png)

### If you look at the screenshot above, It's simple Markdown, the file it's just to make users know what's OpenBlu about on their native language
----------------------------------------------
![coffeehouse](https://i.imgur.com/skF4Xta.png)
##### The CoffeeHouse translations works on the same way as the OpenBlu one's
------------------------------------------------
### There's no significant file structure changes between dashboards, so, you shouldn't have problems translating CoffeeHouse too
---------------------------------------------------
## After you're done, you can publish your changes on our [repo](https://github.com/intellivoid/Translations), so your language may be added to future versions of CoffeeHouse & OpenBlu dashboards