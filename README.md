# rainloop-nextcloud

rainloop-nextcloud is a plugin for Nextcloud to use the excellent Rainloop webmail.

## How to install
Start within Nextcloud, and click on the "+ Apps" button in the upper-left corner dropdown menu:

![Image1](https://github.com/pierre-alain-b/rainloop-nextcloud/blob/master/screenshots/help_a1.png)

Then, enable the Rainloop plugin that is in the "Social & communication" section:

![Image2](https://github.com/pierre-alain-b/rainloop-nextcloud/blob/master/screenshots/help_a2.png)

After a quick wait, Rainloop is installed. Even if it is really attractive, it is too soon to click on the newly appeared "Email" icon in the apps list.
You should configure Rainloop before using it (which makes some sense, doesn'it): go to Nextcloud admin panel (upper-right corner dropdown menu) and go to "Additionnal settings". There click on the "Go to RainLoop Webmail admin panel".

![Image3](https://github.com/pierre-alain-b/rainloop-nextcloud/blob/master/screenshots/help_a3.png)

In the Rainloop admin prompt, the default login is "admin" and the default password is "12345". No need to advise you to change it once in the admin panel!

This is it, you are now free to configure Rainloop as you wish. One important point is the Domains section when you will set up the IMAP/SMTP parameters that shall be associated with the email adresses of your users.

![Image4](https://github.com/pierre-alain-b/rainloop-nextcloud/blob/master/screenshots/help_a4.png)

Enjoy!

## How to activate Rainloop logging and find logs

You can activate Rainloop logging here: `/path/to/nextcloud/data/rainloop-storage/_data_/_default_/configs/application.ini`
```
[logs]
enable = On
```
And then logs are then available in `/path/to/nextcloud/data/rainloop-storage/_data_/_default_/logs/`
