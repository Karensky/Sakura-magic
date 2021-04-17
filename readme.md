
# Sakura-magic

这是我基于 [mashirozx / Sakura](https://github.com/mashirozx/Sakura) 一个 wordpress 主题进行的魔改版。

由于原 php 代码极其混乱，在进行资源收束后勉强能用，如果你需要取用或者魔改，可以参考以下信息。

在阅读以下信息前，默认你已经具备了基础的前端开发能力。

## 成版展示

在经过高度定制后：

<img src='https://cdn.jsdelivr.net/gh/fz6m/Private-picgo@moe-2021/img/20210417155440.jpg' width='100%' />

## 初始展示

主题包在 wordpress 第一次使用打开后的样子：

<img src='https://cdn.jsdelivr.net/gh/fz6m/Private-picgo@moe-2021/img/20210417155932.jpg' width='100%' />

## 使用步骤

1. 将 `Sakura-magic` 目录压缩，上传到 `/wp-content/themes` 下解压缩

2. 在 wordpress 后台启用本主题

3. 外观 → Sakura 主题设置 → CDN → 本地调用前端库 两个选项全部勾选，保证所有资源走本地，以及你的 cdn 收敛位置

4. 对所有静态资源详尽的排查和收束到个人仓库，滴水不漏

5. 进行高度的自定义、魔改、以及功能的开发

## 资源收敛

为了保证资源安全和稳定性，所有用到的资源全部收束到了个人的 github 仓库（如果该功能在本魔改版里不会用到，则没有做收束）。

所有收束资源统一走 jsdelivr cdn，保证 100% 管控和速度。

强烈建议你使用本版主题前，也对所有可能用到的资源做个人收束，这会花费大量时间，但很值得。

### 资源位置

以下是资源收束内容和位置

#### 核心 css

文件位置: `/header.php` 

line: 16 - 19

#### 自定义 js

文件位置：`/footer.php`

line: 94 - 143

#### 收敛仓库

仓库|说明
:-:|:-
[fz6m / Private-web](https://github.com/fz6m/Private-web)|主要核心资源，包括 css、图片、js
[fz6m / console-ban](https://github.com/fz6m/console-ban)|防 f12 审查功能
[fz6m / china-lantern](https://github.com/fz6m/china-lantern)|新年灯笼挂件
[fz6m / img-error-autofill](https://github.com/fz6m/img-error-autofill)|错误加载时图片填充
[fz6m / live2d-generator](https://github.com/fz6m/live2d-generator)|live2d 所有资源
[fz6m / lamu-leimu-button](https://github.com/fz6m/lamu-leimu-button)|拉姆雷姆页面滚动按钮
[VincentGarreau / particles.js](https://github.com/VincentGarreau/particles.js)|粒子动态背景

以上展示出的仓库，都详细记载了开发与配置方法，你都可以自行开发进行自定义。

未展示的资源均收束在 [fz6m / Private-web](https://github.com/fz6m/Private-web) 仓库，自行根据路径查找和修改即可。

### 如何进行个人收敛

1. 在源码里查找所有 `https://` 和 `http://` 以及 `//` 开头的网络资源，全部下载然后放在一起，传到自己的 cdn 进行管理，并对网址进行替换。

    由于本版已经对需要用到的功能做了资源收束，你只需要拉取仓库或者下载 release 当次版本即可，之后传到自己的 cdn，统一替换网址，这将大幅减轻你的压力。
    
    当然，依然有许多资源未被本版收束，因为他们在本版中不会用到（如果你需要使用这部分的功能，请你自行追查到资源位置并进行收束）

2. 尽可能 review 所有代码，保证所有资源 100% 管控，并全部上云保证速度。


## 其他

1. 使用本版主题意味着你已经完全把控了所有代码和资源，并可以高度自定义和开发，由于极高的自定义性，你将损失所有该主题后续更新版本的收益，不过这些问题你应该可以轻松解决。

2. 由于原版代码极其的混乱，本版高度的自定义在外观看来，似乎完全掩盖了代码的无数问题。

