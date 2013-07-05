<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title>css3 基础动画</title>
<!-- <link rel="stylesheet" href="http://a.tbcdn.cn/apps/e/brix/1.0/brix-min.css"/> -->

<style> 
/** 清除内外边距 **/
body, h1, h2, h3, h4, h5, h6, hr, p, blockquote, /* structural elements 结构元素 */
dl, dt, dd, ul, ol, li, /* list elements 列表元素 */
pre, /* text formatting elements 文本格式元素 */
form, fieldset, legend, button, input, textarea, /* form elements 表单元素 */
th, td /* table elements 表格元素 */ {
    margin: 0;
    padding: 0;
}
body {
    background: #333 url(http://img04.taobaocdn.com/tps/i4/T1k61YXs0fXXbmbP6j-57-57.jpg);
}



@charset "UTF-8";
/*
Animate.css - http://daneden.me/animate
Licensed under the ☺ license (http://licence.visualidiot.com/)

Copyright (c) 2012 Dan Eden

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

.animated {
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    -o-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
}

.animated.hinge {
    -webkit-animation-duration: 2s;
    -moz-animation-duration: 2s;
    -o-animation-duration: 2s;
    animation-duration: 2s;
}

@-webkit-keyframes flash {
    0%, 50%, 100% {
        opacity: 1;
    }

    25%, 75% {
        opacity: 0;
    }
}

@-moz-keyframes flash {
    0%, 50%, 100% {
        opacity: 1;
    }

    25%, 75% {
        opacity: 0;
    }
}

@-o-keyframes flash {
    0%, 50%, 100% {
        opacity: 1;
    }

    25%, 75% {
        opacity: 0;
    }
}

@keyframes flash {
    0%, 50%, 100% {
        opacity: 1;
    }

    25%, 75% {
        opacity: 0;
    }
}

.flash {
    -webkit-animation-name: flash;
    -moz-animation-name: flash;
    -o-animation-name: flash;
    animation-name: flash;
}

@-webkit-keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -webkit-transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -webkit-transform: translateX(10px);
    }
}

@-moz-keyframes shake {
    0%, 100% {
        -moz-transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -moz-transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -moz-transform: translateX(10px);
    }
}

@-o-keyframes shake {
    0%, 100% {
        -o-transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -o-transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -o-transform: translateX(10px);
    }
}

@keyframes shake {
    0%, 100% {
        transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        transform: translateX(10px);
    }
}

.shake {
    -webkit-animation-name: shake;
    -moz-animation-name: shake;
    -o-animation-name: shake;
    animation-name: shake;
}

@-webkit-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        -webkit-transform: translateY(0);
    }

    40% {
        -webkit-transform: translateY(-30px);
    }

    60% {
        -webkit-transform: translateY(-15px);
    }
}

@-moz-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        -moz-transform: translateY(0);
    }

    40% {
        -moz-transform: translateY(-30px);
    }

    60% {
        -moz-transform: translateY(-15px);
    }
}

@-o-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        -o-transform: translateY(0);
    }

    40% {
        -o-transform: translateY(-30px);
    }

    60% {
        -o-transform: translateY(-15px);
    }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }

    40% {
        transform: translateY(-30px);
    }

    60% {
        transform: translateY(-15px);
    }
}

.bounce {
    -webkit-animation-name: bounce;
    -moz-animation-name: bounce;
    -o-animation-name: bounce;
    animation-name: bounce;
}

@-webkit-keyframes tada {
    0% {
        -webkit-transform: scale(1);
    }

    10%, 20% {
        -webkit-transform: scale(0.9) rotate(-3deg);
    }

    30%, 50%, 70%, 90% {
        -webkit-transform: scale(1.1) rotate(3deg);
    }

    40%, 60%, 80% {
        -webkit-transform: scale(1.1) rotate(-3deg);
    }

    100% {
        -webkit-transform: scale(1) rotate(0);
    }
}

@-moz-keyframes tada {
    0% {
        -moz-transform: scale(1);
    }

    10%, 20% {
        -moz-transform: scale(0.9) rotate(-3deg);
    }

    30%, 50%, 70%, 90% {
        -moz-transform: scale(1.1) rotate(3deg);
    }

    40%, 60%, 80% {
        -moz-transform: scale(1.1) rotate(-3deg);
    }

    100% {
        -moz-transform: scale(1) rotate(0);
    }
}

@-o-keyframes tada {
    0% {
        -o-transform: scale(1);
    }

    10%, 20% {
        -o-transform: scale(0.9) rotate(-3deg);
    }

    30%, 50%, 70%, 90% {
        -o-transform: scale(1.1) rotate(3deg);
    }

    40%, 60%, 80% {
        -o-transform: scale(1.1) rotate(-3deg);
    }

    100% {
        -o-transform: scale(1) rotate(0);
    }
}

@keyframes tada {
    0% {
        transform: scale(1);
    }

    10%, 20% {
        transform: scale(0.9) rotate(-3deg);
    }

    30%, 50%, 70%, 90% {
        transform: scale(1.1) rotate(3deg);
    }

    40%, 60%, 80% {
        transform: scale(1.1) rotate(-3deg);
    }

    100% {
        transform: scale(1) rotate(0);
    }
}

.tada {
    -webkit-animation-name: tada;
    -moz-animation-name: tada;
    -o-animation-name: tada;
    animation-name: tada;
}

@-webkit-keyframes swing {
    20%, 40%, 60%, 80%, 100% {
        -webkit-transform-origin: top center;
    }

    20% {
        -webkit-transform: rotate(15deg);
    }

    40% {
        -webkit-transform: rotate(-10deg);
    }

    60% {
        -webkit-transform: rotate(5deg);
    }

    80% {
        -webkit-transform: rotate(-5deg);
    }

    100% {
        -webkit-transform: rotate(0deg);
    }
}

@-moz-keyframes swing {
    20% {
        -moz-transform: rotate(15deg);
    }

    40% {
        -moz-transform: rotate(-10deg);
    }

    60% {
        -moz-transform: rotate(5deg);
    }

    80% {
        -moz-transform: rotate(-5deg);
    }

    100% {
        -moz-transform: rotate(0deg);
    }
}

@-o-keyframes swing {
    20% {
        -o-transform: rotate(15deg);
    }

    40% {
        -o-transform: rotate(-10deg);
    }

    60% {
        -o-transform: rotate(5deg);
    }

    80% {
        -o-transform: rotate(-5deg);
    }

    100% {
        -o-transform: rotate(0deg);
    }
}

@keyframes swing {
    20% {
        transform: rotate(15deg);
    }

    40% {
        transform: rotate(-10deg);
    }

    60% {
        transform: rotate(5deg);
    }

    80% {
        transform: rotate(-5deg);
    }

    100% {
        transform: rotate(0deg);
    }
}

.swing {
    -webkit-transform-origin: top center;
    -moz-transform-origin: top center;
    -o-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    -moz-animation-name: swing;
    -o-animation-name: swing;
    animation-name: swing;
}
/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes wobble {
    0% {
        -webkit-transform: translateX(0%);
    }

    15% {
        -webkit-transform: translateX(-25%) rotate(-5deg);
    }

    30% {
        -webkit-transform: translateX(20%) rotate(3deg);
    }

    45% {
        -webkit-transform: translateX(-15%) rotate(-3deg);
    }

    60% {
        -webkit-transform: translateX(10%) rotate(2deg);
    }

    75% {
        -webkit-transform: translateX(-5%) rotate(-1deg);
    }

    100% {
        -webkit-transform: translateX(0%);
    }
}

@-moz-keyframes wobble {
    0% {
        -moz-transform: translateX(0%);
    }

    15% {
        -moz-transform: translateX(-25%) rotate(-5deg);
    }

    30% {
        -moz-transform: translateX(20%) rotate(3deg);
    }

    45% {
        -moz-transform: translateX(-15%) rotate(-3deg);
    }

    60% {
        -moz-transform: translateX(10%) rotate(2deg);
    }

    75% {
        -moz-transform: translateX(-5%) rotate(-1deg);
    }

    100% {
        -moz-transform: translateX(0%);
    }
}

@-o-keyframes wobble {
    0% {
        -o-transform: translateX(0%);
    }

    15% {
        -o-transform: translateX(-25%) rotate(-5deg);
    }

    30% {
        -o-transform: translateX(20%) rotate(3deg);
    }

    45% {
        -o-transform: translateX(-15%) rotate(-3deg);
    }

    60% {
        -o-transform: translateX(10%) rotate(2deg);
    }

    75% {
        -o-transform: translateX(-5%) rotate(-1deg);
    }

    100% {
        -o-transform: translateX(0%);
    }
}

@keyframes wobble {
    0% {
        transform: translateX(0%);
    }

    15% {
        transform: translateX(-25%) rotate(-5deg);
    }

    30% {
        transform: translateX(20%) rotate(3deg);
    }

    45% {
        transform: translateX(-15%) rotate(-3deg);
    }

    60% {
        transform: translateX(10%) rotate(2deg);
    }

    75% {
        transform: translateX(-5%) rotate(-1deg);
    }

    100% {
        transform: translateX(0%);
    }
}

.wobble {
    -webkit-animation-name: wobble;
    -moz-animation-name: wobble;
    -o-animation-name: wobble;
    animation-name: wobble;
}
/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
    }

    50% {
        -webkit-transform: scale(1.1);
    }

    100% {
        -webkit-transform: scale(1);
    }
}

@-moz-keyframes pulse {
    0% {
        -moz-transform: scale(1);
    }

    50% {
        -moz-transform: scale(1.1);
    }

    100% {
        -moz-transform: scale(1);
    }
}

@-o-keyframes pulse {
    0% {
        -o-transform: scale(1);
    }

    50% {
        -o-transform: scale(1.1);
    }

    100% {
        -o-transform: scale(1);
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }

    100% {
        transform: scale(1);
    }
}

.pulse {
    -webkit-animation-name: pulse;
    -moz-animation-name: pulse;
    -o-animation-name: pulse;
    animation-name: pulse;
}

@-webkit-keyframes flip {
    0% {
        -webkit-transform: perspective(400px) rotateY(0);
        -webkit-animation-timing-function: ease-out;
    }

    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
        -webkit-animation-timing-function: ease-out;
    }

    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
        -webkit-animation-timing-function: ease-in;
    }

    80% {
        -webkit-transform: perspective(400px) rotateY(360deg) scale(.95);
        -webkit-animation-timing-function: ease-in;
    }

    100% {
        -webkit-transform: perspective(400px) scale(1);
        -webkit-animation-timing-function: ease-in;
    }
}

@-moz-keyframes flip {
    0% {
        -moz-transform: perspective(400px) rotateY(0);
        -moz-animation-timing-function: ease-out;
    }

    40% {
        -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
        -moz-animation-timing-function: ease-out;
    }

    50% {
        -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
        -moz-animation-timing-function: ease-in;
    }

    80% {
        -moz-transform: perspective(400px) rotateY(360deg) scale(.95);
        -moz-animation-timing-function: ease-in;
    }

    100% {
        -moz-transform: perspective(400px) scale(1);
        -moz-animation-timing-function: ease-in;
    }
}

@-o-keyframes flip {
    0% {
        -o-transform: perspective(400px) rotateY(0);
        -o-animation-timing-function: ease-out;
    }

    40% {
        -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
        -o-animation-timing-function: ease-out;
    }

    50% {
        -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
        -o-animation-timing-function: ease-in;
    }

    80% {
        -o-transform: perspective(400px) rotateY(360deg) scale(.95);
        -o-animation-timing-function: ease-in;
    }

    100% {
        -o-transform: perspective(400px) scale(1);
        -o-animation-timing-function: ease-in;
    }
}

@keyframes flip {
    0% {
        transform: perspective(400px) rotateY(0);
        animation-timing-function: ease-out;
    }

    40% {
        transform: perspective(400px) translateZ(150px) rotateY(170deg);
        animation-timing-function: ease-out;
    }

    50% {
        transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
        animation-timing-function: ease-in;
    }

    80% {
        transform: perspective(400px) rotateY(360deg) scale(.95);
        animation-timing-function: ease-in;
    }

    100% {
        transform: perspective(400px) scale(1);
        animation-timing-function: ease-in;
    }
}

.flip {
    -webkit-backface-visibility: visible !important;
    -webkit-animation-name: flip;
    -moz-backface-visibility: visible !important;
    -moz-animation-name: flip;
    -o-backface-visibility: visible !important;
    -o-animation-name: flip;
    backface-visibility: visible !important;
    animation-name: flip;
}

@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }

    40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
    }

    70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
    }

    100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

@-moz-keyframes flipInX {
    0% {
        -moz-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }

    40% {
        -moz-transform: perspective(400px) rotateX(-10deg);
    }

    70% {
        -moz-transform: perspective(400px) rotateX(10deg);
    }

    100% {
        -moz-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

@-o-keyframes flipInX {
    0% {
        -o-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }

    40% {
        -o-transform: perspective(400px) rotateX(-10deg);
    }

    70% {
        -o-transform: perspective(400px) rotateX(10deg);
    }

    100% {
        -o-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

@keyframes flipInX {
    0% {
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }

    40% {
        transform: perspective(400px) rotateX(-10deg);
    }

    70% {
        transform: perspective(400px) rotateX(10deg);
    }

    100% {
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

.flipInX {
    -webkit-backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    -moz-backface-visibility: visible !important;
    -moz-animation-name: flipInX;
    -o-backface-visibility: visible !important;
    -o-animation-name: flipInX;
    backface-visibility: visible !important;
    animation-name: flipInX;
}

@-webkit-keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }

    100% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

@-moz-keyframes flipOutX {
    0% {
        -moz-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }

    100% {
        -moz-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

@-o-keyframes flipOutX {
    0% {
        -o-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }

    100% {
        -o-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

@keyframes flipOutX {
    0% {
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }

    100% {
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

.flipOutX {
    -webkit-animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    -moz-animation-name: flipOutX;
    -moz-backface-visibility: visible !important;
    -o-animation-name: flipOutX;
    -o-backface-visibility: visible !important;
    animation-name: flipOutX;
    backface-visibility: visible !important;
}

@-webkit-keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }

    40% {
        -webkit-transform: perspective(400px) rotateY(-10deg);
    }

    70% {
        -webkit-transform: perspective(400px) rotateY(10deg);
    }

    100% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

@-moz-keyframes flipInY {
    0% {
        -moz-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }

    40% {
        -moz-transform: perspective(400px) rotateY(-10deg);
    }

    70% {
        -moz-transform: perspective(400px) rotateY(10deg);
    }

    100% {
        -moz-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

@-o-keyframes flipInY {
    0% {
        -o-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }

    40% {
        -o-transform: perspective(400px) rotateY(-10deg);
    }

    70% {
        -o-transform: perspective(400px) rotateY(10deg);
    }

    100% {
        -o-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

@keyframes flipInY {
    0% {
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }

    40% {
        transform: perspective(400px) rotateY(-10deg);
    }

    70% {
        transform: perspective(400px) rotateY(10deg);
    }

    100% {
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

.flipInY {
    -webkit-backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    -moz-backface-visibility: visible !important;
    -moz-animation-name: flipInY;
    -o-backface-visibility: visible !important;
    -o-animation-name: flipInY;
    backface-visibility: visible !important;
    animation-name: flipInY;
}

@-webkit-keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }

    100% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

@-moz-keyframes flipOutY {
    0% {
        -moz-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }

    100% {
        -moz-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

@-o-keyframes flipOutY {
    0% {
        -o-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }

    100% {
        -o-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

@keyframes flipOutY {
    0% {
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }

    100% {
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

.flipOutY {
    -webkit-backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    -moz-backface-visibility: visible !important;
    -moz-animation-name: flipOutY;
    -o-backface-visibility: visible !important;
    -o-animation-name: flipOutY;
    backface-visibility: visible !important;
    animation-name: flipOutY;
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

@-moz-keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

@-o-keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    -moz-animation-name: fadeIn;
    -o-animation-name: fadeIn;
    animation-name: fadeIn;
}

@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes fadeInUp {
    0% {
        opacity: 0;
        -moz-transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0);
    }
}

@-o-keyframes fadeInUp {
    0% {
        opacity: 0;
        -o-transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -o-transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    -moz-animation-name: fadeInUp;
    -o-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes fadeInDown {
    0% {
        opacity: 0;
        -moz-transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0);
    }
}

@-o-keyframes fadeInDown {
    0% {
        opacity: 0;
        -o-transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -o-transform: translateY(0);
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    -moz-animation-name: fadeInDown;
    -o-animation-name: fadeInDown;
    animation-name: fadeInDown;
}

@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@-moz-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -moz-transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0);
    }
}

@-o-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -o-transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -o-transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    0% {
        opacity: 0;
        transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    -moz-animation-name: fadeInLeft;
    -o-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@-moz-keyframes fadeInRight {
    0% {
        opacity: 0;
        -moz-transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0);
    }
}

@-o-keyframes fadeInRight {
    0% {
        opacity: 0;
        -o-transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -o-transform: translateX(0);
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        transform: translateX(20px);
    }

    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    -moz-animation-name: fadeInRight;
    -o-animation-name: fadeInRight;
    animation-name: fadeInRight;
}

@-webkit-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -moz-transform: translateY(2000px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0);
    }
}

@-o-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -o-transform: translateY(2000px);
    }

    100% {
        opacity: 1;
        -o-transform: translateY(0);
    }
}

@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        transform: translateY(2000px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    -moz-animation-name: fadeInUpBig;
    -o-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -moz-transform: translateY(-2000px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0);
    }
}

@-o-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -o-transform: translateY(-2000px);
    }

    100% {
        opacity: 1;
        -o-transform: translateY(0);
    }
}

@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        transform: translateY(-2000px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    -moz-animation-name: fadeInDownBig;
    -o-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@-moz-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -moz-transform: translateX(-2000px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0);
    }
}

@-o-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -o-transform: translateX(-2000px);
    }

    100% {
        opacity: 1;
        -o-transform: translateX(0);
    }
}

@keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        transform: translateX(-2000px);
    }

    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    -moz-animation-name: fadeInLeftBig;
    -o-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@-moz-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -moz-transform: translateX(2000px);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0);
    }
}

@-o-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -o-transform: translateX(2000px);
    }

    100% {
        opacity: 1;
        -o-transform: translateX(0);
    }
}

@keyframes fadeInRightBig {
    0% {
        opacity: 0;
        transform: translateX(2000px);
    }

    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    -moz-animation-name: fadeInRightBig;
    -o-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig;
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

@-moz-keyframes fadeOut {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

@-o-keyframes fadeOut {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    -moz-animation-name: fadeOut;
    -o-animation-name: fadeOut;
    animation-name: fadeOut;
}

@-webkit-keyframes fadeOutUp {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
    }
}

@-moz-keyframes fadeOutUp {
    0% {
        opacity: 1;
        -moz-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateY(-20px);
    }
}

@-o-keyframes fadeOutUp {
    0% {
        opacity: 1;
        -o-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateY(-20px);
    }
}

@keyframes fadeOutUp {
    0% {
        opacity: 1;
        transform: translateY(0);
    }

    100% {
        opacity: 0;
        transform: translateY(-20px);
    }
}

.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    -moz-animation-name: fadeOutUp;
    -o-animation-name: fadeOutUp;
    animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOutDown {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(20px);
    }
}

@-moz-keyframes fadeOutDown {
    0% {
        opacity: 1;
        -moz-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateY(20px);
    }
}

@-o-keyframes fadeOutDown {
    0% {
        opacity: 1;
        -o-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateY(20px);
    }
}

@keyframes fadeOutDown {
    0% {
        opacity: 1;
        transform: translateY(0);
    }

    100% {
        opacity: 0;
        transform: translateY(20px);
    }
}

.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    -moz-animation-name: fadeOutDown;
    -o-animation-name: fadeOutDown;
    animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
    }
}

@-moz-keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -moz-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(-20px);
    }
}

@-o-keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -o-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(-20px);
    }
}

@keyframes fadeOutLeft {
    0% {
        opacity: 1;
        transform: translateX(0);
    }

    100% {
        opacity: 0;
        transform: translateX(-20px);
    }
}

.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    -moz-animation-name: fadeOutLeft;
    -o-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft;
}

@-webkit-keyframes fadeOutRight {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(20px);
    }
}

@-moz-keyframes fadeOutRight {
    0% {
        opacity: 1;
        -moz-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(20px);
    }
}

@-o-keyframes fadeOutRight {
    0% {
        opacity: 1;
        -o-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(20px);
    }
}

@keyframes fadeOutRight {
    0% {
        opacity: 1;
        transform: translateX(0);
    }

    100% {
        opacity: 0;
        transform: translateX(20px);
    }
}

.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    -moz-animation-name: fadeOutRight;
    -o-animation-name: fadeOutRight;
    animation-name: fadeOutRight;
}

@-webkit-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }
}

@-moz-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -moz-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateY(-2000px);
    }
}

@-o-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -o-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateY(-2000px);
    }
}

@keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        transform: translateY(0);
    }

    100% {
        opacity: 0;
        transform: translateY(-2000px);
    }
}

.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    -moz-animation-name: fadeOutUpBig;
    -o-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig;
}

@-webkit-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }
}

@-moz-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -moz-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateY(2000px);
    }
}

@-o-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -o-transform: translateY(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateY(2000px);
    }
}

@keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        transform: translateY(0);
    }

    100% {
        opacity: 0;
        transform: translateY(2000px);
    }
}

.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    -moz-animation-name: fadeOutDownBig;
    -o-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig;
}

@-webkit-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }
}

@-moz-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -moz-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(-2000px);
    }
}

@-o-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -o-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(-2000px);
    }
}

@keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        transform: translateX(0);
    }

    100% {
        opacity: 0;
        transform: translateX(-2000px);
    }
}

.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    -moz-animation-name: fadeOutLeftBig;
    -o-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig;
}

@-webkit-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }
}

@-moz-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -moz-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(2000px);
    }
}

@-o-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -o-transform: translateX(0);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(2000px);
    }
}

@keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        transform: translateX(0);
    }

    100% {
        opacity: 0;
        transform: translateX(2000px);
    }
}

.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    -moz-animation-name: fadeOutRightBig;
    -o-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig;
}

@-webkit-keyframes bounceIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
    }

    50% {
        opacity: 1;
        -webkit-transform: scale(1.05);
    }

    70% {
        -webkit-transform: scale(.9);
    }

    100% {
        -webkit-transform: scale(1);
    }
}

@-moz-keyframes bounceIn {
    0% {
        opacity: 0;
        -moz-transform: scale(.3);
    }

    50% {
        opacity: 1;
        -moz-transform: scale(1.05);
    }

    70% {
        -moz-transform: scale(.9);
    }

    100% {
        -moz-transform: scale(1);
    }
}

@-o-keyframes bounceIn {
    0% {
        opacity: 0;
        -o-transform: scale(.3);
    }

    50% {
        opacity: 1;
        -o-transform: scale(1.05);
    }

    70% {
        -o-transform: scale(.9);
    }

    100% {
        -o-transform: scale(1);
    }
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(.3);
    }

    50% {
        opacity: 1;
        transform: scale(1.05);
    }

    70% {
        transform: scale(.9);
    }

    100% {
        transform: scale(1);
    }
}

.bounceIn {
    -webkit-animation-name: bounceIn;
    -moz-animation-name: bounceIn;
    -o-animation-name: bounceIn;
    animation-name: bounceIn;
}

@-webkit-keyframes bounceInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }

    60% {
        opacity: 1;
        -webkit-transform: translateY(-30px);
    }

    80% {
        -webkit-transform: translateY(10px);
    }

    100% {
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes bounceInUp {
    0% {
        opacity: 0;
        -moz-transform: translateY(2000px);
    }

    60% {
        opacity: 1;
        -moz-transform: translateY(-30px);
    }

    80% {
        -moz-transform: translateY(10px);
    }

    100% {
        -moz-transform: translateY(0);
    }
}

@-o-keyframes bounceInUp {
    0% {
        opacity: 0;
        -o-transform: translateY(2000px);
    }

    60% {
        opacity: 1;
        -o-transform: translateY(-30px);
    }

    80% {
        -o-transform: translateY(10px);
    }

    100% {
        -o-transform: translateY(0);
    }
}

@keyframes bounceInUp {
    0% {
        opacity: 0;
        transform: translateY(2000px);
    }

    60% {
        opacity: 1;
        transform: translateY(-30px);
    }

    80% {
        transform: translateY(10px);
    }

    100% {
        transform: translateY(0);
    }
}

.bounceInUp {
    -webkit-animation-name: bounceInUp;
    -moz-animation-name: bounceInUp;
    -o-animation-name: bounceInUp;
    animation-name: bounceInUp;
}

@-webkit-keyframes bounceInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }

    60% {
        opacity: 1;
        -webkit-transform: translateY(30px);
    }

    80% {
        -webkit-transform: translateY(-10px);
    }

    100% {
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes bounceInDown {
    0% {
        opacity: 0;
        -moz-transform: translateY(-2000px);
    }

    60% {
        opacity: 1;
        -moz-transform: translateY(30px);
    }

    80% {
        -moz-transform: translateY(-10px);
    }

    100% {
        -moz-transform: translateY(0);
    }
}

@-o-keyframes bounceInDown {
    0% {
        opacity: 0;
        -o-transform: translateY(-2000px);
    }

    60% {
        opacity: 1;
        -o-transform: translateY(30px);
    }

    80% {
        -o-transform: translateY(-10px);
    }

    100% {
        -o-transform: translateY(0);
    }
}

@keyframes bounceInDown {
    0% {
        opacity: 0;
        transform: translateY(-2000px);
    }

    60% {
        opacity: 1;
        transform: translateY(30px);
    }

    80% {
        transform: translateY(-10px);
    }

    100% {
        transform: translateY(0);
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    -moz-animation-name: bounceInDown;
    -o-animation-name: bounceInDown;
    animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }

    60% {
        opacity: 1;
        -webkit-transform: translateX(30px);
    }

    80% {
        -webkit-transform: translateX(-10px);
    }

    100% {
        -webkit-transform: translateX(0);
    }
}

@-moz-keyframes bounceInLeft {
    0% {
        opacity: 0;
        -moz-transform: translateX(-2000px);
    }

    60% {
        opacity: 1;
        -moz-transform: translateX(30px);
    }

    80% {
        -moz-transform: translateX(-10px);
    }

    100% {
        -moz-transform: translateX(0);
    }
}

@-o-keyframes bounceInLeft {
    0% {
        opacity: 0;
        -o-transform: translateX(-2000px);
    }

    60% {
        opacity: 1;
        -o-transform: translateX(30px);
    }

    80% {
        -o-transform: translateX(-10px);
    }

    100% {
        -o-transform: translateX(0);
    }
}

@keyframes bounceInLeft {
    0% {
        opacity: 0;
        transform: translateX(-2000px);
    }

    60% {
        opacity: 1;
        transform: translateX(30px);
    }

    80% {
        transform: translateX(-10px);
    }

    100% {
        transform: translateX(0);
    }
}

.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    -moz-animation-name: bounceInLeft;
    -o-animation-name: bounceInLeft;
    animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }

    60% {
        opacity: 1;
        -webkit-transform: translateX(-30px);
    }

    80% {
        -webkit-transform: translateX(10px);
    }

    100% {
        -webkit-transform: translateX(0);
    }
}

@-moz-keyframes bounceInRight {
    0% {
        opacity: 0;
        -moz-transform: translateX(2000px);
    }

    60% {
        opacity: 1;
        -moz-transform: translateX(-30px);
    }

    80% {
        -moz-transform: translateX(10px);
    }

    100% {
        -moz-transform: translateX(0);
    }
}

@-o-keyframes bounceInRight {
    0% {
        opacity: 0;
        -o-transform: translateX(2000px);
    }

    60% {
        opacity: 1;
        -o-transform: translateX(-30px);
    }

    80% {
        -o-transform: translateX(10px);
    }

    100% {
        -o-transform: translateX(0);
    }
}

@keyframes bounceInRight {
    0% {
        opacity: 0;
        transform: translateX(2000px);
    }

    60% {
        opacity: 1;
        transform: translateX(-30px);
    }

    80% {
        transform: translateX(10px);
    }

    100% {
        transform: translateX(0);
    }
}

.bounceInRight {
    -webkit-animation-name: bounceInRight;
    -moz-animation-name: bounceInRight;
    -o-animation-name: bounceInRight;
    animation-name: bounceInRight;
}

@-webkit-keyframes bounceOut {
    0% {
        -webkit-transform: scale(1);
    }

    25% {
        -webkit-transform: scale(.95);
    }

    50% {
        opacity: 1;
        -webkit-transform: scale(1.1);
    }

    100% {
        opacity: 0;
        -webkit-transform: scale(.3);
    }
}

@-moz-keyframes bounceOut {
    0% {
        -moz-transform: scale(1);
    }

    25% {
        -moz-transform: scale(.95);
    }

    50% {
        opacity: 1;
        -moz-transform: scale(1.1);
    }

    100% {
        opacity: 0;
        -moz-transform: scale(.3);
    }
}

@-o-keyframes bounceOut {
    0% {
        -o-transform: scale(1);
    }

    25% {
        -o-transform: scale(.95);
    }

    50% {
        opacity: 1;
        -o-transform: scale(1.1);
    }

    100% {
        opacity: 0;
        -o-transform: scale(.3);
    }
}

@keyframes bounceOut {
    0% {
        transform: scale(1);
    }

    25% {
        transform: scale(.95);
    }

    50% {
        opacity: 1;
        transform: scale(1.1);
    }

    100% {
        opacity: 0;
        transform: scale(.3);
    }
}

.bounceOut {
    -webkit-animation-name: bounceOut;
    -moz-animation-name: bounceOut;
    -o-animation-name: bounceOut;
    animation-name: bounceOut;
}

@-webkit-keyframes bounceOutUp {
    0% {
        -webkit-transform: translateY(0);
    }

    20% {
        opacity: 1;
        -webkit-transform: translateY(20px);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }
}

@-moz-keyframes bounceOutUp {
    0% {
        -moz-transform: translateY(0);
    }

    20% {
        opacity: 1;
        -moz-transform: translateY(20px);
    }

    100% {
        opacity: 0;
        -moz-transform: translateY(-2000px);
    }
}

@-o-keyframes bounceOutUp {
    0% {
        -o-transform: translateY(0);
    }

    20% {
        opacity: 1;
        -o-transform: translateY(20px);
    }

    100% {
        opacity: 0;
        -o-transform: translateY(-2000px);
    }
}

@keyframes bounceOutUp {
    0% {
        transform: translateY(0);
    }

    20% {
        opacity: 1;
        transform: translateY(20px);
    }

    100% {
        opacity: 0;
        transform: translateY(-2000px);
    }
}

.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    -moz-animation-name: bounceOutUp;
    -o-animation-name: bounceOutUp;
    animation-name: bounceOutUp;
}

@-webkit-keyframes bounceOutDown {
    0% {
        -webkit-transform: translateY(0);
    }

    20% {
        opacity: 1;
        -webkit-transform: translateY(-20px);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }
}

@-moz-keyframes bounceOutDown {
    0% {
        -moz-transform: translateY(0);
    }

    20% {
        opacity: 1;
        -moz-transform: translateY(-20px);
    }

    100% {
        opacity: 0;
        -moz-transform: translateY(2000px);
    }
}

@-o-keyframes bounceOutDown {
    0% {
        -o-transform: translateY(0);
    }

    20% {
        opacity: 1;
        -o-transform: translateY(-20px);
    }

    100% {
        opacity: 0;
        -o-transform: translateY(2000px);
    }
}

@keyframes bounceOutDown {
    0% {
        transform: translateY(0);
    }

    20% {
        opacity: 1;
        transform: translateY(-20px);
    }

    100% {
        opacity: 0;
        transform: translateY(2000px);
    }
}

.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    -moz-animation-name: bounceOutDown;
    -o-animation-name: bounceOutDown;
    animation-name: bounceOutDown;
}

@-webkit-keyframes bounceOutLeft {
    0% {
        -webkit-transform: translateX(0);
    }

    20% {
        opacity: 1;
        -webkit-transform: translateX(20px);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }
}

@-moz-keyframes bounceOutLeft {
    0% {
        -moz-transform: translateX(0);
    }

    20% {
        opacity: 1;
        -moz-transform: translateX(20px);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(-2000px);
    }
}

@-o-keyframes bounceOutLeft {
    0% {
        -o-transform: translateX(0);
    }

    20% {
        opacity: 1;
        -o-transform: translateX(20px);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(-2000px);
    }
}

@keyframes bounceOutLeft {
    0% {
        transform: translateX(0);
    }

    20% {
        opacity: 1;
        transform: translateX(20px);
    }

    100% {
        opacity: 0;
        transform: translateX(-2000px);
    }
}

.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    -moz-animation-name: bounceOutLeft;
    -o-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft;
}

@-webkit-keyframes bounceOutRight {
    0% {
        -webkit-transform: translateX(0);
    }

    20% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }
}

@-moz-keyframes bounceOutRight {
    0% {
        -moz-transform: translateX(0);
    }

    20% {
        opacity: 1;
        -moz-transform: translateX(-20px);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(2000px);
    }
}

@-o-keyframes bounceOutRight {
    0% {
        -o-transform: translateX(0);
    }

    20% {
        opacity: 1;
        -o-transform: translateX(-20px);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(2000px);
    }
}

@keyframes bounceOutRight {
    0% {
        transform: translateX(0);
    }

    20% {
        opacity: 1;
        transform: translateX(-20px);
    }

    100% {
        opacity: 0;
        transform: translateX(2000px);
    }
}

.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    -moz-animation-name: bounceOutRight;
    -o-animation-name: bounceOutRight;
    animation-name: bounceOutRight;
}

@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(-200deg);
        opacity: 0;
    }

    100% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@-moz-keyframes rotateIn {
    0% {
        -moz-transform-origin: center center;
        -moz-transform: rotate(-200deg);
        opacity: 0;
    }

    100% {
        -moz-transform-origin: center center;
        -moz-transform: rotate(0);
        opacity: 1;
    }
}

@-o-keyframes rotateIn {
    0% {
        -o-transform-origin: center center;
        -o-transform: rotate(-200deg);
        opacity: 0;
    }

    100% {
        -o-transform-origin: center center;
        -o-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateIn {
    0% {
        transform-origin: center center;
        transform: rotate(-200deg);
        opacity: 0;
    }

    100% {
        transform-origin: center center;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    -moz-animation-name: rotateIn;
    -o-animation-name: rotateIn;
    animation-name: rotateIn;
}

@-webkit-keyframes rotateInUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@-moz-keyframes rotateInUpLeft {
    0% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }
}

@-o-keyframes rotateInUpLeft {
    0% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInUpLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    -moz-animation-name: rotateInUpLeft;
    -o-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@-moz-keyframes rotateInDownLeft {
    0% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }
}

@-o-keyframes rotateInDownLeft {
    0% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInDownLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    -moz-animation-name: rotateInDownLeft;
    -o-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@-moz-keyframes rotateInUpRight {
    0% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }
}

@-o-keyframes rotateInUpRight {
    0% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInUpRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(-90deg);
        opacity: 0;
    }

    100% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    -moz-animation-name: rotateInUpRight;
    -o-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateInDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@-moz-keyframes rotateInDownRight {
    0% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }
}

@-o-keyframes rotateInDownRight {
    0% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInDownRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(90deg);
        opacity: 0;
    }

    100% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    -moz-animation-name: rotateInDownRight;
    -o-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight;
}

@-webkit-keyframes rotateOut {
    0% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(200deg);
        opacity: 0;
    }
}

@-moz-keyframes rotateOut {
    0% {
        -moz-transform-origin: center center;
        -moz-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -moz-transform-origin: center center;
        -moz-transform: rotate(200deg);
        opacity: 0;
    }
}

@-o-keyframes rotateOut {
    0% {
        -o-transform-origin: center center;
        -o-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -o-transform-origin: center center;
        -o-transform: rotate(200deg);
        opacity: 0;
    }
}

@keyframes rotateOut {
    0% {
        transform-origin: center center;
        transform: rotate(0);
        opacity: 1;
    }

    100% {
        transform-origin: center center;
        transform: rotate(200deg);
        opacity: 0;
    }
}

.rotateOut {
    -webkit-animation-name: rotateOut;
    -moz-animation-name: rotateOut;
    -o-animation-name: rotateOut;
    animation-name: rotateOut;
}

@-webkit-keyframes rotateOutUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }
}

@-moz-keyframes rotateOutUpLeft {
    0% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(-90deg);
        opacity: 0;
    }
}

@-o-keyframes rotateOutUpLeft {
    0% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(-90deg);
        opacity: 0;
    }
}

@keyframes rotateOutUpLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }

    100% {
        -transform-origin: left bottom;
        -transform: rotate(-90deg);
        opacity: 0;
    }
}

.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    -moz-animation-name: rotateOutUpLeft;
    -o-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft;
}

@-webkit-keyframes rotateOutDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }
}

@-moz-keyframes rotateOutDownLeft {
    0% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -moz-transform-origin: left bottom;
        -moz-transform: rotate(90deg);
        opacity: 0;
    }
}

@-o-keyframes rotateOutDownLeft {
    0% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -o-transform-origin: left bottom;
        -o-transform: rotate(90deg);
        opacity: 0;
    }
}

@keyframes rotateOutDownLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }

    100% {
        transform-origin: left bottom;
        transform: rotate(90deg);
        opacity: 0;
    }
}

.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    -moz-animation-name: rotateOutDownLeft;
    -o-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft;
}

@-webkit-keyframes rotateOutUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }
}

@-moz-keyframes rotateOutUpRight {
    0% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(90deg);
        opacity: 0;
    }
}

@-o-keyframes rotateOutUpRight {
    0% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(90deg);
        opacity: 0;
    }
}

@keyframes rotateOutUpRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }

    100% {
        transform-origin: right bottom;
        transform: rotate(90deg);
        opacity: 0;
    }
}

.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    -moz-animation-name: rotateOutUpRight;
    -o-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight;
}

@-webkit-keyframes rotateOutDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }
}

@-moz-keyframes rotateOutDownRight {
    0% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -moz-transform-origin: right bottom;
        -moz-transform: rotate(-90deg);
        opacity: 0;
    }
}

@-o-keyframes rotateOutDownRight {
    0% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(0);
        opacity: 1;
    }

    100% {
        -o-transform-origin: right bottom;
        -o-transform: rotate(-90deg);
        opacity: 0;
    }
}

@keyframes rotateOutDownRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }

    100% {
        transform-origin: right bottom;
        transform: rotate(-90deg);
        opacity: 0;
    }
}

.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    -moz-animation-name: rotateOutDownRight;
    -o-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight;
}

@-webkit-keyframes hinge {
    0% {
        -webkit-transform: rotate(0);
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }

    20%, 60% {
        -webkit-transform: rotate(80deg);
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }

    40% {
        -webkit-transform: rotate(60deg);
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }

    80% {
        -webkit-transform: rotate(60deg) translateY(0);
        opacity: 1;
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }

    100% {
        -webkit-transform: translateY(700px);
        opacity: 0;
    }
}

@-moz-keyframes hinge {
    0% {
        -moz-transform: rotate(0);
        -moz-transform-origin: top left;
        -moz-animation-timing-function: ease-in-out;
    }

    20%, 60% {
        -moz-transform: rotate(80deg);
        -moz-transform-origin: top left;
        -moz-animation-timing-function: ease-in-out;
    }

    40% {
        -moz-transform: rotate(60deg);
        -moz-transform-origin: top left;
        -moz-animation-timing-function: ease-in-out;
    }

    80% {
        -moz-transform: rotate(60deg) translateY(0);
        opacity: 1;
        -moz-transform-origin: top left;
        -moz-animation-timing-function: ease-in-out;
    }

    100% {
        -moz-transform: translateY(700px);
        opacity: 0;
    }
}

@-o-keyframes hinge {
    0% {
        -o-transform: rotate(0);
        -o-transform-origin: top left;
        -o-animation-timing-function: ease-in-out;
    }

    20%, 60% {
        -o-transform: rotate(80deg);
        -o-transform-origin: top left;
        -o-animation-timing-function: ease-in-out;
    }

    40% {
        -o-transform: rotate(60deg);
        -o-transform-origin: top left;
        -o-animation-timing-function: ease-in-out;
    }

    80% {
        -o-transform: rotate(60deg) translateY(0);
        opacity: 1;
        -o-transform-origin: top left;
        -o-animation-timing-function: ease-in-out;
    }

    100% {
        -o-transform: translateY(700px);
        opacity: 0;
    }
}

@keyframes hinge {
    0% {
        transform: rotate(0);
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }

    20%, 60% {
        transform: rotate(80deg);
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }

    40% {
        transform: rotate(60deg);
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }

    80% {
        transform: rotate(60deg) translateY(0);
        opacity: 1;
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }

    100% {
        transform: translateY(700px);
        opacity: 0;
    }
}

.hinge {
    -webkit-animation-name: hinge;
    -moz-animation-name: hinge;
    -o-animation-name: hinge;
    animation-name: hinge;
}
/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%) rotate(-120deg);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
    }
}

@-moz-keyframes rollIn {
    0% {
        opacity: 0;
        -moz-transform: translateX(-100%) rotate(-120deg);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0px) rotate(0deg);
    }
}

@-o-keyframes rollIn {
    0% {
        opacity: 0;
        -o-transform: translateX(-100%) rotate(-120deg);
    }

    100% {
        opacity: 1;
        -o-transform: translateX(0px) rotate(0deg);
    }
}

@keyframes rollIn {
    0% {
        opacity: 0;
        transform: translateX(-100%) rotate(-120deg);
    }

    100% {
        opacity: 1;
        transform: translateX(0px) rotate(0deg);
    }
}

.rollIn {
    -webkit-animation-name: rollIn;
    -moz-animation-name: rollIn;
    -o-animation-name: rollIn;
    animation-name: rollIn;
}
/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollOut {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
    }

    100% {
        opacity: 0;
        -webkit-transform: translateX(100%) rotate(120deg);
    }
}

@-moz-keyframes rollOut {
    0% {
        opacity: 1;
        -moz-transform: translateX(0px) rotate(0deg);
    }

    100% {
        opacity: 0;
        -moz-transform: translateX(100%) rotate(120deg);
    }
}

@-o-keyframes rollOut {
    0% {
        opacity: 1;
        -o-transform: translateX(0px) rotate(0deg);
    }

    100% {
        opacity: 0;
        -o-transform: translateX(100%) rotate(120deg);
    }
}

@keyframes rollOut {
    0% {
        opacity: 1;
        transform: translateX(0px) rotate(0deg);
    }

    100% {
        opacity: 0;
        transform: translateX(100%) rotate(120deg);
    }
}

.rollOut {
    -webkit-animation-name: rollOut;
    -moz-animation-name: rollOut;
    -o-animation-name: rollOut;
    animation-name: rollOut;
}

/* originally authored by Angelo Rohit - https://github.com/angelorohit */

@-webkit-keyframes lightSpeedIn {
    0% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }

    60% {
        -webkit-transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }

    80% {
        -webkit-transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }

    100% {
        -webkit-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

@-moz-keyframes lightSpeedIn {
    0% {
        -moz-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }

    60% {
        -moz-transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }

    80% {
        -moz-transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }

    100% {
        -moz-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

@-o-keyframes lightSpeedIn {
    0% {
        -o-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }

    60% {
        -o-transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }

    80% {
        -o-transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }

    100% {
        -o-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

@keyframes lightSpeedIn {
    0% {
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }

    60% {
        transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }

    80% {
        transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }

    100% {
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    -moz-animation-name: lightSpeedIn;
    -o-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

.animated.lightSpeedIn {
    -webkit-animation-duration: 0.5s;
    -moz-animation-duration: 0.5s;
    -o-animation-duration: 0.5s;
    animation-duration: 0.5s;
}

/* originally authored by Angelo Rohit - https://github.com/angelorohit */

@-webkit-keyframes lightSpeedOut {
    0% {
        -webkit-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }

    100% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

@-moz-keyframes lightSpeedOut {
    0% {
        -moz-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }

    100% {
        -moz-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

@-o-keyframes lightSpeedOut {
    0% {
        -o-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }

    100% {
        -o-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

@keyframes lightSpeedOut {
    0% {
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }

    100% {
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    -moz-animation-name: lightSpeedOut;
    -o-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}

.animated.lightSpeedOut {
    -webkit-animation-duration: 0.25s;
    -moz-animation-duration: 0.25s;
    -o-animation-duration: 0.25s;
    animation-duration: 0.25s;
}

/* originally authored by Angelo Rohit - https://github.com/angelorohit */

@-webkit-keyframes wiggle {
    0% {
        -webkit-transform: skewX(9deg);
    }

    10% {
        -webkit-transform: skewX(-8deg);
    }

    20% {
        -webkit-transform: skewX(7deg);
    }

    30% {
        -webkit-transform: skewX(-6deg);
    }

    40% {
        -webkit-transform: skewX(5deg);
    }

    50% {
        -webkit-transform: skewX(-4deg);
    }

    60% {
        -webkit-transform: skewX(3deg);
    }

    70% {
        -webkit-transform: skewX(-2deg);
    }

    80% {
        -webkit-transform: skewX(1deg);
    }

    90% {
        -webkit-transform: skewX(0deg);
    }

    100% {
        -webkit-transform: skewX(0deg);
    }
}

@-moz-keyframes wiggle {
    0% {
        -moz-transform: skewX(9deg);
    }

    10% {
        -moz-transform: skewX(-8deg);
    }

    20% {
        -moz-transform: skewX(7deg);
    }

    30% {
        -moz-transform: skewX(-6deg);
    }

    40% {
        -moz-transform: skewX(5deg);
    }

    50% {
        -moz-transform: skewX(-4deg);
    }

    60% {
        -moz-transform: skewX(3deg);
    }

    70% {
        -moz-transform: skewX(-2deg);
    }

    80% {
        -moz-transform: skewX(1deg);
    }

    90% {
        -moz-transform: skewX(0deg);
    }

    100% {
        -moz-transform: skewX(0deg);
    }
}

@-o-keyframes wiggle {
    0% {
        -o-transform: skewX(9deg);
    }

    10% {
        -o-transform: skewX(-8deg);
    }

    20% {
        -o-transform: skewX(7deg);
    }

    30% {
        -o-transform: skewX(-6deg);
    }

    40% {
        -o-transform: skewX(5deg);
    }

    50% {
        -o-transform: skewX(-4deg);
    }

    60% {
        -o-transform: skewX(3deg);
    }

    70% {
        -o-transform: skewX(-2deg);
    }

    80% {
        -o-transform: skewX(1deg);
    }

    90% {
        -o-transform: skewX(0deg);
    }

    100% {
        -o-transform: skewX(0deg);
    }
}

@keyframes wiggle {
    0% {
        transform: skewX(9deg);
    }

    10% {
        transform: skewX(-8deg);
    }

    20% {
        transform: skewX(7deg);
    }

    30% {
        transform: skewX(-6deg);
    }

    40% {
        transform: skewX(5deg);
    }

    50% {
        transform: skewX(-4deg);
    }

    60% {
        transform: skewX(3deg);
    }

    70% {
        transform: skewX(-2deg);
    }

    80% {
        transform: skewX(1deg);
    }

    90% {
        transform: skewX(0deg);
    }

    100% {
        transform: skewX(0deg);
    }
}

.wiggle {
    -webkit-animation-name: wiggle;
    -moz-animation-name: wiggle;
    -o-animation-name: wiggle;
    animation-name: wiggle;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}

.animated.wiggle {
    -webkit-animation-duration: 0.75s;
    -moz-animation-duration: 0.75s;
    -o-animation-duration: 0.75s;
    animation-duration: 0.75s;
} 



.top-img {
    margin: 0 auto;
    text-align: center;
}
.anim-box {
    margin: 0px auto;
    width: 1100px;
}
.div-anim {
    display: inline-block;
    width: 250px;
    height: 200px;
    line-height: 200px;
    text-align: center;
    background: #1EA071;
    margin: 0 10px 10px 0;
    color: #fff;
    font-size: 25px;
    font-weight: bold;
    cursor: pointer;
}
.div-anim {
    *display: inline;
}
.mar-top {
    margin-top: 50px;
}
p {
    text-align: center;
    margin: 10px auto;
    font-size: 35px;
    color: #fff;
    font-family: 'Nosifer', cursive;
}
</style>
<link href="http://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet" type="text/css"> 
</head>

<body>
    <div class="top-img">
        <img src="http://img02.taobaocdn.com/tps/i2/T1b.FmFnlcXXczHD_C-576-232.png" />
    </div>
    <p>CSS3 Animations</p>
    <p>Just Click each DIV</p>

    <div class="anim-box">

        <div class="div-anim animated" data-class="shake"></div>
        <div class="div-anim animated" data-class="flash"></div>
        <div class="div-anim animated" data-class="bounce"></div>
        <div class="div-anim animated" data-class="tada"></div>

        <div class="div-anim mar-top animated" data-class="hinge"></div>
        <div class="div-anim animated" data-class="wiggle"></div>
        <div class="div-anim animated" data-class="swing"></div>
        <div class="div-anim animated" data-class="wobble"></div>

        <div class="div-anim mar-top animated" data-class="flipInX"></div>
        <div class="div-anim animated" data-class="flipInY"></div>
        <div class="div-anim animated" data-class="flipOutX"></div>
        <div class="div-anim animated" data-class="flipOutY"></div>

        <div class="div-anim mar-top animated" data-class="flip"></div>
        <div class="div-anim animated" data-class="fadeIn"></div>
        <div class="div-anim animated" data-class="flipInX"></div>
        <div class="div-anim animated" data-class="fadeInUp"></div>

        <div class="div-anim mar-top animated" data-class="fadeInDown"></div>
        <div class="div-anim animated" data-class="fadeInLeft"></div>
        <div class="div-anim animated" data-class="fadeInRight"></div>
        <div class="div-anim animated" data-class="fadeInUpBig"></div>

        <div class="div-anim mar-top animated" data-class="fadeInDownBig"></div>
        <div class="div-anim animated" data-class="fadeInLeftBig"></div>
        <div class="div-anim animated" data-class="fadeInRightBig"></div>
        <div class="div-anim animated" data-class="fadeOut"></div>

        <div class="div-anim mar-top animated" data-class="fadeOutUp"></div>
        <div class="div-anim animated" data-class="fadeOutDown"></div>
        <div class="div-anim animated" data-class="fadeOutLeft"></div>
        <div class="div-anim animated" data-class="fadeOutRight"></div>

        <div class="div-anim mar-top animated" data-class="fadeOutUpBig"></div>
        <div class="div-anim animated" data-class="fadeOutDownBig"></div>
        <div class="div-anim animated" data-class="fadeOutLeftBig"></div>
        <div class="div-anim animated" data-class="fadeOutRightBig"></div>
        
        <div class="div-anim mar-top animated" data-class="bounceIn"></div>
        <div class="div-anim animated" data-class="bounceInUp"></div>
        <div class="div-anim animated" data-class="bounceInDown"></div>
        <div class="div-anim animated" data-class="bounceInLeft"></div>
                
        <div class="div-anim mar-top animated" data-class="bounceInRight"></div>
        <div class="div-anim animated" data-class="bounceOut"></div>
        <div class="div-anim animated" data-class="bounceOutUp"></div>
        <div class="div-anim animated" data-class="bounceOutDown"></div>
                        
        <div class="div-anim mar-top animated" data-class="bounceOutLeft"></div>
        <div class="div-anim animated" data-class="bounceOutRight"></div>
        <div class="div-anim animated" data-class="rotateIn"></div>
        <div class="div-anim animated" data-class="rotateInUpLeft"></div>
                        
        <div class="div-anim mar-top animated" data-class="rotateInDownLeft"></div>
        <div class="div-anim animated" data-class="rotateInUpRight"></div>
        <div class="div-anim animated" data-class="rotateInDownRight"></div>
        <div class="div-anim animated" data-class="rotateOut"></div>
                                
        <div class="div-anim mar-top animated" data-class="rotateOutUpLeft"></div>
        <div class="div-anim animated" data-class="rotateOutDownLeft"></div>
        <div class="div-anim animated" data-class="rotateOutUpRight"></div>
        <div class="div-anim animated" data-class="rotateOutDownRight"></div>
                                
        <div class="div-anim mar-top animated" data-class="rollIn"></div>
        <div class="div-anim animated" data-class="rollOut"></div>
        <div class="div-anim animated" data-class="lightSpeedIn"></div>
        <div class="div-anim animated" data-class="lightSpeedOut"></div>



    </div>

</body>
<script src="http://a.tbcdn.cn/s/kissy/1.3.0/kissy-min.js"></script>
<script>
KISSY.ready(function(){
    var S = KISSY,
        $ = KISSY.all,
        D = KISSY.DOM;

    if (S.UA.ie<=9) {
        S.use('gallery/anti-ie6/1.0/draw/');
    }
    $('.div-anim').each(function(node,key){
        var clazz = $(node).attr('data-class');
        $(node).html(clazz);
        $(node).on('click',function(){
            var self = this;
            $(self).addClass(clazz);
            setTimeout(function(){
                $(self).removeClass('.'+clazz,clazz);
            },1000);
        });
    });

});
</script>
</html>

<!-- 

shake flash bounce tada swing wobble

pulse flip flipInX flipOutX

flipInY flipOutY fadeIn fadeInUp

fadeInDown fadeInLeft fadeInRight fadeInUpBig

fadeInDownBig fadeInLeftBig fadeInRightBig


fadeOut  fadeOutUp  fadeOutDown  fadeOutLeft  fadeOutRight  
fadeOutUpBig  fadeOutDownBig  fadeOutLeftBig fadeOutRightBig 

bounceIn  bounceInUp  bounceInDown  bounceInLeft  bounceInRight

bounceOut  bounceOutUp  bounceOutDown  bounceOutLeft  bounceOutRight  rotateIn

rotateInUpLeft  rotateInDownLeft  rotateInUpRight  rotateInDownRight  rotateOut 

rotateOutUpLeft  rotateOutDownLeft  rotateOutUpRight  rotateOutDownRight



hinge  rollIn  rollOut  lightSpeedIn  lightSpeedOut  wiggle -->