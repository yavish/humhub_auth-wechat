# Wechat Sign-In

Using this module, users can directly log in or register with their Wechat credentials at this HumHub installation. 
A new button "Wechat" will appear on the login page.

## Configuration

Please follow the [Wechat instructions](https://github.com/yavish/humhub_auth-wechat) to create the required ` OAuth client ID` credentials.

Once you have the **AppID** and **AppSecret** created there, the values must then be entered in the module configuration at: `Administration -> Modules -> Wechat Auth -> Settings`. 
This page also displays the `Authorized redirect URI`, which must be inserted in Wechat in the corresponding field.


humhub module : login by scan code with wechat auth   
humhub 模块 ： 微信扫码登录模块   
标准的humhub 模块， 可以直接放到 Humhub 的模块加载目录，例如： protected/modules/ 目录下   
系统管理员登录后， 激活模块，配置 AppID 与 AppSecret（微信开放平台获取，并将微信开放平台的设置：授权回调域: 设置成 humhub 部署的网站域名;





