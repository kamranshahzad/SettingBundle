# SettingBundle

## Description:

This bundle provides the functionality to add setting forms for your project bundles.
You can create custom setting forms using XMLFormBundle.

![alt text](https://github.com/kamranshahzad/SettingBundle/blob/master/Resources/public/img/settings-screenshot.png "Settings screenshot")

## Installation.

Using composer

``` bash
$ composer require kamran/setting-bundle dev-master
```
Add the KamranSettingBundle to your AppKernel.php file:

```
new Kamran\SettingBundle\KamranSettingBundle();
```

## How to use?

1. Add settings url in your 'routing.yml'
```yml
kamran_settings:
    resource: "@KamranSettingsBundle/Resources/config/routing.yml"
```

2. Create a setting xml file in your bundle:
```
    [YourBundleName]->Resources->config->[bundlename]_settings.xml
```	
	* `[bundlename]_settings` : '_settings' is postfix for settings form name.

3. Here is example settings form	
```
    UserBundle->Resources->config->userbundle_settings.xml
```
```xml
<settings>
    <links>
        <link key="user_settings" order="1" attach-form="userSettingsForm" >User Settings</link>
    </links>
    <forms>
        <form id="userSettingsForm" name="tagtype_form" method="POST">
            <fields>
                <grid-size type="text" required="false" label="Grid Paging Size" ></grid-size>
                <default-role type="text" required="false" label="Default Role for Registration" ></default-role>
                <type type="choice" required="false" label="Select Tag Type" >
                    <choices>
                        <item key="1">10</item>
                        <item key="2">20</item>
                        <item key="3">25</item>
                        <item key="7">40</item>
                    </choices>
                </type>
            </fields>
        </form>
    </forms>
</settings>
```

## Todo list:

* Easy configurations
* Tab forms
* Useful commands support

## Reporting an issue or feature request.

Issues and feature requests are tracked in the 
[Github issue tracker](https://github.com/kamranshahzad/SettingBundle/issues).


How to contribute?
------------------------------------
The contribution for this bundle for public is open, anybody could help me to participate 
bugs, documentation and code.



## License.
This software is licensed under the MIT license. See the complete license file in the bundle:
```
Resources/meta/LICENSE
```
[Read the License](https://github.com/kamranshahzad/SettingBundle/blob/master/Resources/meta/LICENSE)

