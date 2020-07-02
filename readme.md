## 魔域获取积分、自动抽奖

> step1: 需要关注官方公众号 “魔域小甜心”

> step2: 绑定会员跟游戏账号关系

> step3: 通过抓包工具获取cookie(目前没有过期限制)

### 使用
```
git clone git@github.com:hezhizheng/moyu.git

cd moyu

# 安装依赖
composer update -vvv

# 配置文件，设置cookie
cp app/config.php.conf app/config.php

# 运行
php app/index.php
```