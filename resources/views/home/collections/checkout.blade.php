<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Nội thất Dưa Leo - Thanh toán đơn hàng
        </title>
            <meta name="description" content="Nội thất Dưa Leo - Thanh toán đơn hàng">
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="/css/checkouts.css?v=1.1" rel="stylesheet" type="text/css" media="all">
        <link href="/css/check_out.css?v=82" rel="stylesheet" type="text/css" media="all">

        <script src="/js/jquery.validate.js" type="text/javascript"></script>

        <style>
        .mainbar-qr h2 {
text-align: center;
font-size: 16px;
margin-bottom: 30px;
font-weight: 500;
color: #212121;
}
.mainbar-info .mainbar-qr_section {
text-align: center;
}
.mainbar-info .mainbar-qr_section .count_time {
margin-bottom: 10px;
margin-top: 30px;
}
.mainbar-info .mainbar-qr_section .count_time .time-out {
color: #008fe5;
}
.mainbar-info .mainbar-qr_section .count_time .count_text {
margin-bottom: 10px;
}
.mainbar-info .mainbar-qr_section .count_time .time {
display: inline-block;
position: relative;
font-style: italic;
font-size:12px;
}
.mainbar-info .mainbar-qr_section .count_time .time i {
width: 10px;
height: 10px;
border: 1px solid #333;
border-bottom-color: transparent;
border-radius: 100%;
position: absolute;
top: 50%;
left: -14px;
margin-top: -6px;
margin-left: -6px;
opacity: 1;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 0 ")";
filter: alpha(opacity=0);
-webkit-animation: rotate 0.5s linear infinite;
animation: rotate 0.5s linear infinite;
opacity: 1;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
filter: alpha(opacity=100);
}
.mainbar-info .mainbar-qr_instruction {
max-width: 300px;
margin: auto;
text-align: center;
color: #212121;
line-height: 24px;
}

form#form_update_shipping_method {
position: relative;
}
.order-checkout__loading { position: static; }
.order-checkout__loading--box{
position: absolute;
left: 0;
top: 0;
z-index: -1;
width: 100%;
height: 100%;
display: -webkit-flex;
display: flex;
opacity: 0;
visibility: hidden;
justify-content: center;
align-items: center;
padding: 0;
}
.order-checkout__loading--box.show {
z-index: 2;
visibility: visible;
opacity: 1;
}
.order-checkout__loading--circle {
border: 2px solid #f3f3f3;
border-top: 2px solid #5cabe0;
border-radius: 50%;
width: 32px;
height: 32px;
margin: 0;
-webkit-transform-origin: 50%;
-o-transform-origin: 50%;
-ms-transform-origin: 50%;
transform-origin: 50%;
-moz-animation: spin 700ms infinite linear;
-ms-animation: spin 1.5s infinite linear;
-webkit-animation: spin 700ms infinite linear;
-o-animation: spin 700ms infinite linear;
animation: spin 700ms infinite linear;
z-index: 1;
}
.order-checkout__loading--box.show:after {
content: "";
position: fixed;
width: 100%;
height: 100%;
left: 0;
top: 0;
z-index: 3;
}


.step-sections { position: relative; z-index: 3; }

@media (max-width: 767px){
.order-checkout__loading--box{ position: fixed; }
.order-checkout__loading--box.show:after { display: none; }
}


.order-checkout__loading--show .order-checkout__loading--box {
display:block;
}


@-moz-keyframes spin {
100% {
-moz-transform: rotate(360deg);
}
}

@-webkit-keyframes spin {
100% {
-webkit-transform: rotate(360deg);
}
}

@keyframes spin {
100% {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
        .redeem-login {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .redeem-login-title {
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }
        .redeem-login-title h2 {
            color: #333;
            margin-right: 5px;
        }
        .redeem-login-btn a {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 13px 10px;
            background: #338dbc;
            color: #fff;
            width: 82px;
            text-align: center;
        }
        .redeem-form-used
        {
            padding-top : 10px;
        }
        .btn-redeem-loading .btn-redeem-spinner {
           -webkit-animation: rotate 0.5s linear infinite;
           animation: rotate 0.5s linear infinite;
           opacity: 1;
           -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=" 100 ")";
           filter: alpha(opacity=100);
        }
        .icon-redeem-button-spinner {
            position: absolute;
            top: 0;
            opacity: 0;
            right: -25px;
            width: 12px;
            height: 12px;
            border: 2px solid #999999;
            border-bottom-color: transparent;
            border-radius: 100%;
        }
        .total-line-table-footer {
            white-space: nowrap;
        }
        .row-align-top {
            vertical-align: top;
        }
        </style>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    </head>
<body>

    <div class="banner">
        <div class="wrap">
            <a href="/" class="logo">
                <h1 class="logo-text">Nội thất Dưa Leo</h1>
            </a>
        </div>
    </div>
    <button class="order-summary-toggle order-summary-toggle-hide">
        <div class="wrap">
            <div class="order-summary-toggle-inner">
                <div class="order-summary-toggle-icon-wrapper">
                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon"><path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path></svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-show">
                    <span>Hiển thị thông tin đơn hàng</span>
                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                    <span>Ẩn thông tin đơn hàng</span>
                    <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path></svg>
                </div>
                <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="189000000">
                    <span class="total-recap-final-price">1,890,000₫</span>
                </div>
            </div>
        </div>
    </button>
    <div class="content content-second">
        <div class="wrap">
            <div class="sidebar sidebar-second">
                <div class="sidebar-content">
                    <div class="order-summary">
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                    <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="">
                                                </div>
                                                <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="wrap">
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @forelse (session('productCheckoutList')[0] as $productCheckoutItem)

                                            <tr class="product" data-product-id="1017272132" data-variant-id="1033205998">
                                                <td class="product-image">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail-wrapper">
                                                            <img class="product-thumbnail-image" alt="{{$productCheckoutItem['product']['name']}}" src="{{$productCheckoutItem['product']['image']}}">
                                                        </div>
                                                        <span class="product-thumbnail-quantity" aria-hidden="true">{{$productCheckoutItem['quantity']}}</span>
                                                    </div>
                                                </td>
                                                <td class="product-description">
                                                    <span class="product-description-name order-summary-emphasis">{{$productCheckoutItem['product']['name']}}</span>
                                                </td>
                                                <td class="product-quantity visually-hidden">{{$productCheckoutItem['quantity']}}</td>
                                                <td class="product-price">
                                                    <span class="order-summary-emphasis">{{$productCheckoutItem['totalprice']}}</span>
                                                </td>
                                            </tr>

                                            @empty
                                            @endforelse

                                    </tbody>
                                </table>
                            </div>

                                <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                    <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                      <input name="utf8" type="hidden" value="✓">
                                        <div class="fieldset">
                                            <div class="field  ">
                                                <div class="field-input-btn-wrapper">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                        <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="">
                                                    </div>
                                                    <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                        <span class="btn-content">Sử dụng</span>
                                                        <i class="btn-spinner icon icon-button-spinner"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                <table class="total-line-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">Tạm tính</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="189000000">
                                                    {{session('productCheckoutTotalprice')}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">Phí vận chuyển</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">
                                                        —
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                        <tr class="total-line">
                                            <td class="total-line-name payment-due-label">
                                                <span class="payment-due-label-total">Tổng cộng</span>
                                            </td>
                                            <td class="total-line-name payment-due">
                                                <span class="payment-due-currency">VND</span>
                                                <span class="payment-due-price" data-checkout-payment-due-target="189000000">
                                                    {{session('productCheckoutTotalprice')}}
                                                </span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-header">
                    <a href="/" class="logo">
                        <h1 class="logo-text">Nội thất Dưa Leo</h1>
                    </a>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/cart">Giỏ hàng</a>
                        </li>
                        <li class="breadcrumb-item breadcrumb-item-current">
                                Thông tin giao hàng
                        </li>
                        <li class="breadcrumb-item ">
                                Thanh toán
                        </li>
                    </ul>
                </div>
                <div class="main-content">
                    <form action="/addCheckout" method="POST">
                        @csrf
                        <div class="step">
                            <div class="step-sections " step="1">
                                    <div class="section">
                                        <div class="section-header">
                                            <h2 class="section-title">Thông tin giao hàng</h2>
                                        </div>
                                        <div class="section-content section-customer-information no-mb">
                                            <div class="inventory_location_data">
                                            </div>
                                            <div class="fieldset">
                                                <div class="field">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                                        <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="name" value="" required>
                                                    </div>
                                                </div>
                                                <div class="field  field-two-thirds  ">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="checkout_user_email">Email</label>
                                                        <input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="email" value="" required>
                                                    </div>
                                                </div>
                                                <div class="field field-required field-third  ">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                                        <input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="tel" id="billing_address_phone" name="phone_number" value="" required>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <div class="field-input-wrapper">
                                                        <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                                        <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="address" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="step-footer">
                                <button type="submit" class="step-footer-continue-btn btn">
                                    <span class="btn-content">Thanh toán</span>
                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                </button>
                                <a class="step-footer-previous-link" href="/cart">
                                    <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3"><path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path></svg>
                                        Giỏ hàng
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<script>
(function (global, factory) { typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() : typeof define === 'function' && define.amd ? define('qrious', factory) : (global.QRious = factory()); }(this, function () {
'use strict'; var classCallCheck = function (instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }; var createClass = function () {
function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; };
}(); var inherits = function (subClass, superClass) {
if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); }
subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass;
}; var possibleConstructorReturn = function (self, call) {
if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); }
return call && (typeof call === "object" || typeof call === "function") ? call : self;
}; var Utilities = function () {
function Utilities() { classCallCheck(this, Utilities); }
createClass(Utilities, null, [{
key: 'privatize', value: function privatize(target, source) {
    for (var key in source) { if (source.hasOwnProperty(key)) { target['_' + key] = source[key]; } }
    return target;
}
}, {
key: 'setter', value: function setter(object, fieldName, value, defaultValue, transformer) {
    var oldValue = object[fieldName]; var newValue = value != null ? value : defaultValue; if (typeof transformer === 'function') { newValue = transformer(newValue); }
    object[fieldName] = newValue; return newValue !== oldValue;
}
}, { key: 'throwUnimplemented', value: function throwUnimplemented(className, methodName) { throw new Error('"' + methodName + '" method must be implemented on the ' + className + ' class'); } }, { key: 'toUpperCase', value: function toUpperCase(string) { return string != null && string.toUpperCase(); } }]); return Utilities;
}(); var Service = function () {
function Service() { classCallCheck(this, Service); }
createClass(Service, [{ key: 'getName', value: function getName() { Utilities.throwUnimplemented('Service', 'getName'); } }]); return Service;
}(); var ElementService = function (_Service) {
inherits(ElementService, _Service); function ElementService() { classCallCheck(this, ElementService); return possibleConstructorReturn(this, Object.getPrototypeOf(ElementService).apply(this, arguments)); }
createClass(ElementService, [{ key: 'createCanvas', value: function createCanvas() { Utilities.throwUnimplemented('ElementService', 'createCanvas'); } }, { key: 'createImage', value: function createImage() { Utilities.throwUnimplemented('ElementService', 'createImage'); } }, { key: 'getName', value: function getName() { return 'element'; } }, { key: 'isCanvas', value: function isCanvas(element) { Utilities.throwUnimplemented('ElementService', 'isCanvas'); } }, { key: 'isImage', value: function isImage(element) { Utilities.throwUnimplemented('ElementService', 'isImage'); } }]); return ElementService;
}(Service); var BrowserElementService = function (_ElementService) {
inherits(BrowserElementService, _ElementService); function BrowserElementService() { classCallCheck(this, BrowserElementService); return possibleConstructorReturn(this, Object.getPrototypeOf(BrowserElementService).apply(this, arguments)); }
createClass(BrowserElementService, [{ key: 'createCanvas', value: function createCanvas() { return document.createElement('canvas'); } }, { key: 'createImage', value: function createImage() { return document.createElement('img'); } }, { key: 'isCanvas', value: function isCanvas(element) { return element instanceof HTMLCanvasElement; } }, { key: 'isImage', value: function isImage(element) { return element instanceof HTMLImageElement; } }]); return BrowserElementService;
}(ElementService); var Renderer = function () {
function Renderer(qrious) { classCallCheck(this, Renderer); this.qrious = qrious; }
createClass(Renderer, [{ key: 'draw', value: function draw(frame) { Utilities.throwUnimplemented('Renderer', 'draw'); } }, { key: 'getModuleSize', value: function getModuleSize(frame) { var pixels = Math.floor(this.qrious.size / frame.width); return Math.max(1, pixels); } }, { key: 'getOffset', value: function getOffset(frame) { var moduleSize = this.getModuleSize(frame); var offset = Math.floor((this.qrious.size - moduleSize * frame.width) / 2); return Math.max(0, offset); } }, { key: 'render', value: function render(frame) { this.resize(); this.reset(); this.draw(frame); } }, { key: 'reset', value: function reset() { Utilities.throwUnimplemented('Renderer', 'reset'); } }, { key: 'resize', value: function resize() { Utilities.throwUnimplemented('Renderer', 'resize'); } }]); return Renderer;
}(); var CanvasRenderer = function (_Renderer) {
inherits(CanvasRenderer, _Renderer); function CanvasRenderer() { classCallCheck(this, CanvasRenderer); return possibleConstructorReturn(this, Object.getPrototypeOf(CanvasRenderer).apply(this, arguments)); }
createClass(CanvasRenderer, [{ key: 'draw', value: function draw(frame) { var qrious = this.qrious; var moduleSize = this.getModuleSize(frame); var offset = this.getOffset(frame); var context = qrious.canvas.getContext('2d'); context.fillStyle = qrious.foreground; for (var i = 0; i < frame.width; i++) { for (var j = 0; j < frame.width; j++) { if (frame.buffer[j * frame.width + i]) { context.fillRect(moduleSize * i + offset, moduleSize * j + offset, moduleSize, moduleSize); } } } } }, { key: 'reset', value: function reset() { var qrious = this.qrious; var context = qrious.canvas.getContext('2d'); context.lineWidth = 1; context.clearRect(0, 0, qrious.size, qrious.size); context.fillStyle = qrious.background; context.fillRect(0, 0, qrious.size, qrious.size); } }, { key: 'resize', value: function resize() { var qrious = this.qrious; var canvas = qrious.canvas; canvas.width = qrious.size; canvas.height = qrious.size; } }]); return CanvasRenderer;
}(Renderer); var Alignment = function () {
function Alignment() { classCallCheck(this, Alignment); }
createClass(Alignment, null, [{ key: "BLOCK", get: function get() { return [0, 11, 15, 19, 23, 27, 31, 16, 18, 20, 22, 24, 26, 28, 20, 22, 24, 24, 26, 28, 28, 22, 24, 24, 26, 26, 28, 28, 24, 24, 26, 26, 26, 28, 28, 24, 26, 26, 26, 28, 28]; } }]); return Alignment;
}(); var ErrorCorrection = function () {
function ErrorCorrection() { classCallCheck(this, ErrorCorrection); }
createClass(ErrorCorrection, null, [{ key: "BLOCKS", get: function get() { return [1, 0, 19, 7, 1, 0, 16, 10, 1, 0, 13, 13, 1, 0, 9, 17, 1, 0, 34, 10, 1, 0, 28, 16, 1, 0, 22, 22, 1, 0, 16, 28, 1, 0, 55, 15, 1, 0, 44, 26, 2, 0, 17, 18, 2, 0, 13, 22, 1, 0, 80, 20, 2, 0, 32, 18, 2, 0, 24, 26, 4, 0, 9, 16, 1, 0, 108, 26, 2, 0, 43, 24, 2, 2, 15, 18, 2, 2, 11, 22, 2, 0, 68, 18, 4, 0, 27, 16, 4, 0, 19, 24, 4, 0, 15, 28, 2, 0, 78, 20, 4, 0, 31, 18, 2, 4, 14, 18, 4, 1, 13, 26, 2, 0, 97, 24, 2, 2, 38, 22, 4, 2, 18, 22, 4, 2, 14, 26, 2, 0, 116, 30, 3, 2, 36, 22, 4, 4, 16, 20, 4, 4, 12, 24, 2, 2, 68, 18, 4, 1, 43, 26, 6, 2, 19, 24, 6, 2, 15, 28, 4, 0, 81, 20, 1, 4, 50, 30, 4, 4, 22, 28, 3, 8, 12, 24, 2, 2, 92, 24, 6, 2, 36, 22, 4, 6, 20, 26, 7, 4, 14, 28, 4, 0, 107, 26, 8, 1, 37, 22, 8, 4, 20, 24, 12, 4, 11, 22, 3, 1, 115, 30, 4, 5, 40, 24, 11, 5, 16, 20, 11, 5, 12, 24, 5, 1, 87, 22, 5, 5, 41, 24, 5, 7, 24, 30, 11, 7, 12, 24, 5, 1, 98, 24, 7, 3, 45, 28, 15, 2, 19, 24, 3, 13, 15, 30, 1, 5, 107, 28, 10, 1, 46, 28, 1, 15, 22, 28, 2, 17, 14, 28, 5, 1, 120, 30, 9, 4, 43, 26, 17, 1, 22, 28, 2, 19, 14, 28, 3, 4, 113, 28, 3, 11, 44, 26, 17, 4, 21, 26, 9, 16, 13, 26, 3, 5, 107, 28, 3, 13, 41, 26, 15, 5, 24, 30, 15, 10, 15, 28, 4, 4, 116, 28, 17, 0, 42, 26, 17, 6, 22, 28, 19, 6, 16, 30, 2, 7, 111, 28, 17, 0, 46, 28, 7, 16, 24, 30, 34, 0, 13, 24, 4, 5, 121, 30, 4, 14, 47, 28, 11, 14, 24, 30, 16, 14, 15, 30, 6, 4, 117, 30, 6, 14, 45, 28, 11, 16, 24, 30, 30, 2, 16, 30, 8, 4, 106, 26, 8, 13, 47, 28, 7, 22, 24, 30, 22, 13, 15, 30, 10, 2, 114, 28, 19, 4, 46, 28, 28, 6, 22, 28, 33, 4, 16, 30, 8, 4, 122, 30, 22, 3, 45, 28, 8, 26, 23, 30, 12, 28, 15, 30, 3, 10, 117, 30, 3, 23, 45, 28, 4, 31, 24, 30, 11, 31, 15, 30, 7, 7, 116, 30, 21, 7, 45, 28, 1, 37, 23, 30, 19, 26, 15, 30, 5, 10, 115, 30, 19, 10, 47, 28, 15, 25, 24, 30, 23, 25, 15, 30, 13, 3, 115, 30, 2, 29, 46, 28, 42, 1, 24, 30, 23, 28, 15, 30, 17, 0, 115, 30, 10, 23, 46, 28, 10, 35, 24, 30, 19, 35, 15, 30, 17, 1, 115, 30, 14, 21, 46, 28, 29, 19, 24, 30, 11, 46, 15, 30, 13, 6, 115, 30, 14, 23, 46, 28, 44, 7, 24, 30, 59, 1, 16, 30, 12, 7, 121, 30, 12, 26, 47, 28, 39, 14, 24, 30, 22, 41, 15, 30, 6, 14, 121, 30, 6, 34, 47, 28, 46, 10, 24, 30, 2, 64, 15, 30, 17, 4, 122, 30, 29, 14, 46, 28, 49, 10, 24, 30, 24, 46, 15, 30, 4, 18, 122, 30, 13, 32, 46, 28, 48, 14, 24, 30, 42, 32, 15, 30, 20, 4, 117, 30, 40, 7, 47, 28, 43, 22, 24, 30, 10, 67, 15, 30, 19, 6, 118, 30, 18, 31, 47, 28, 34, 34, 24, 30, 20, 61, 15, 30]; } }, { key: "FINAL_FORMAT", get: function get() { return [0x77c4, 0x72f3, 0x7daa, 0x789d, 0x662f, 0x6318, 0x6c41, 0x6976, 0x5412, 0x5125, 0x5e7c, 0x5b4b, 0x45f9, 0x40ce, 0x4f97, 0x4aa0, 0x355f, 0x3068, 0x3f31, 0x3a06, 0x24b4, 0x2183, 0x2eda, 0x2bed, 0x1689, 0x13be, 0x1ce7, 0x19d0, 0x0762, 0x0255, 0x0d0c, 0x083b]; } }, { key: "LEVELS", get: function get() { return { L: 1, M: 2, Q: 3, H: 4 }; } }]); return ErrorCorrection;
}(); var Galois = function () {
function Galois() { classCallCheck(this, Galois); }
createClass(Galois, null, [{ key: "EXPONENT", get: function get() { return [0x01, 0x02, 0x04, 0x08, 0x10, 0x20, 0x40, 0x80, 0x1d, 0x3a, 0x74, 0xe8, 0xcd, 0x87, 0x13, 0x26, 0x4c, 0x98, 0x2d, 0x5a, 0xb4, 0x75, 0xea, 0xc9, 0x8f, 0x03, 0x06, 0x0c, 0x18, 0x30, 0x60, 0xc0, 0x9d, 0x27, 0x4e, 0x9c, 0x25, 0x4a, 0x94, 0x35, 0x6a, 0xd4, 0xb5, 0x77, 0xee, 0xc1, 0x9f, 0x23, 0x46, 0x8c, 0x05, 0x0a, 0x14, 0x28, 0x50, 0xa0, 0x5d, 0xba, 0x69, 0xd2, 0xb9, 0x6f, 0xde, 0xa1, 0x5f, 0xbe, 0x61, 0xc2, 0x99, 0x2f, 0x5e, 0xbc, 0x65, 0xca, 0x89, 0x0f, 0x1e, 0x3c, 0x78, 0xf0, 0xfd, 0xe7, 0xd3, 0xbb, 0x6b, 0xd6, 0xb1, 0x7f, 0xfe, 0xe1, 0xdf, 0xa3, 0x5b, 0xb6, 0x71, 0xe2, 0xd9, 0xaf, 0x43, 0x86, 0x11, 0x22, 0x44, 0x88, 0x0d, 0x1a, 0x34, 0x68, 0xd0, 0xbd, 0x67, 0xce, 0x81, 0x1f, 0x3e, 0x7c, 0xf8, 0xed, 0xc7, 0x93, 0x3b, 0x76, 0xec, 0xc5, 0x97, 0x33, 0x66, 0xcc, 0x85, 0x17, 0x2e, 0x5c, 0xb8, 0x6d, 0xda, 0xa9, 0x4f, 0x9e, 0x21, 0x42, 0x84, 0x15, 0x2a, 0x54, 0xa8, 0x4d, 0x9a, 0x29, 0x52, 0xa4, 0x55, 0xaa, 0x49, 0x92, 0x39, 0x72, 0xe4, 0xd5, 0xb7, 0x73, 0xe6, 0xd1, 0xbf, 0x63, 0xc6, 0x91, 0x3f, 0x7e, 0xfc, 0xe5, 0xd7, 0xb3, 0x7b, 0xf6, 0xf1, 0xff, 0xe3, 0xdb, 0xab, 0x4b, 0x96, 0x31, 0x62, 0xc4, 0x95, 0x37, 0x6e, 0xdc, 0xa5, 0x57, 0xae, 0x41, 0x82, 0x19, 0x32, 0x64, 0xc8, 0x8d, 0x07, 0x0e, 0x1c, 0x38, 0x70, 0xe0, 0xdd, 0xa7, 0x53, 0xa6, 0x51, 0xa2, 0x59, 0xb2, 0x79, 0xf2, 0xf9, 0xef, 0xc3, 0x9b, 0x2b, 0x56, 0xac, 0x45, 0x8a, 0x09, 0x12, 0x24, 0x48, 0x90, 0x3d, 0x7a, 0xf4, 0xf5, 0xf7, 0xf3, 0xfb, 0xeb, 0xcb, 0x8b, 0x0b, 0x16, 0x2c, 0x58, 0xb0, 0x7d, 0xfa, 0xe9, 0xcf, 0x83, 0x1b, 0x36, 0x6c, 0xd8, 0xad, 0x47, 0x8e, 0x00]; } }, { key: "LOG", get: function get() { return [0xff, 0x00, 0x01, 0x19, 0x02, 0x32, 0x1a, 0xc6, 0x03, 0xdf, 0x33, 0xee, 0x1b, 0x68, 0xc7, 0x4b, 0x04, 0x64, 0xe0, 0x0e, 0x34, 0x8d, 0xef, 0x81, 0x1c, 0xc1, 0x69, 0xf8, 0xc8, 0x08, 0x4c, 0x71, 0x05, 0x8a, 0x65, 0x2f, 0xe1, 0x24, 0x0f, 0x21, 0x35, 0x93, 0x8e, 0xda, 0xf0, 0x12, 0x82, 0x45, 0x1d, 0xb5, 0xc2, 0x7d, 0x6a, 0x27, 0xf9, 0xb9, 0xc9, 0x9a, 0x09, 0x78, 0x4d, 0xe4, 0x72, 0xa6, 0x06, 0xbf, 0x8b, 0x62, 0x66, 0xdd, 0x30, 0xfd, 0xe2, 0x98, 0x25, 0xb3, 0x10, 0x91, 0x22, 0x88, 0x36, 0xd0, 0x94, 0xce, 0x8f, 0x96, 0xdb, 0xbd, 0xf1, 0xd2, 0x13, 0x5c, 0x83, 0x38, 0x46, 0x40, 0x1e, 0x42, 0xb6, 0xa3, 0xc3, 0x48, 0x7e, 0x6e, 0x6b, 0x3a, 0x28, 0x54, 0xfa, 0x85, 0xba, 0x3d, 0xca, 0x5e, 0x9b, 0x9f, 0x0a, 0x15, 0x79, 0x2b, 0x4e, 0xd4, 0xe5, 0xac, 0x73, 0xf3, 0xa7, 0x57, 0x07, 0x70, 0xc0, 0xf7, 0x8c, 0x80, 0x63, 0x0d, 0x67, 0x4a, 0xde, 0xed, 0x31, 0xc5, 0xfe, 0x18, 0xe3, 0xa5, 0x99, 0x77, 0x26, 0xb8, 0xb4, 0x7c, 0x11, 0x44, 0x92, 0xd9, 0x23, 0x20, 0x89, 0x2e, 0x37, 0x3f, 0xd1, 0x5b, 0x95, 0xbc, 0xcf, 0xcd, 0x90, 0x87, 0x97, 0xb2, 0xdc, 0xfc, 0xbe, 0x61, 0xf2, 0x56, 0xd3, 0xab, 0x14, 0x2a, 0x5d, 0x9e, 0x84, 0x3c, 0x39, 0x53, 0x47, 0x6d, 0x41, 0xa2, 0x1f, 0x2d, 0x43, 0xd8, 0xb7, 0x7b, 0xa4, 0x76, 0xc4, 0x17, 0x49, 0xec, 0x7f, 0x0c, 0x6f, 0xf6, 0x6c, 0xa1, 0x3b, 0x52, 0x29, 0x9d, 0x55, 0xaa, 0xfb, 0x60, 0x86, 0xb1, 0xbb, 0xcc, 0x3e, 0x5a, 0xcb, 0x59, 0x5f, 0xb0, 0x9c, 0xa9, 0xa0, 0x51, 0x0b, 0xf5, 0x16, 0xeb, 0x7a, 0x75, 0x2c, 0xd7, 0x4f, 0xae, 0xd5, 0xe9, 0xe6, 0xe7, 0xad, 0xe8, 0x74, 0xd6, 0xf4, 0xea, 0xa8, 0x50, 0x58, 0xaf]; } }]); return Galois;
}(); var Version = function () {
function Version() { classCallCheck(this, Version); }
createClass(Version, null, [{ key: "BLOCK", get: function get() { return [0xc94, 0x5bc, 0xa99, 0x4d3, 0xbf6, 0x762, 0x847, 0x60d, 0x928, 0xb78, 0x45d, 0xa17, 0x532, 0x9a6, 0x683, 0x8c9, 0x7ec, 0xec4, 0x1e1, 0xfab, 0x08e, 0xc1a, 0x33f, 0xd75, 0x250, 0x9d5, 0x6f0, 0x8ba, 0x79f, 0xb0b, 0x42e, 0xa64, 0x541, 0xc69]; } }]); return Version;
}(); var Frame = function () {
createClass(Frame, null, [{
key: '_createArray', value: function _createArray(length) {
    var array = []; for (var i = 0; i < length; i++) { array[i] = 0; }
    return array;
}
}, {
key: '_getMaskBit', value: function _getMaskBit(x, y) {
    var bit = void 0; if (x > y) { bit = x; x = y; y = bit; }
    bit = y; bit += y * y; bit >>= 1; bit += x; return bit;
}
}, {
key: '_modN', value: function _modN(x) {
    while (x >= 255) { x -= 255; x = (x >> 8) + (x & 255); }
    return x;
}
}, { key: 'N1', get: function get() { return 3; } }, { key: 'N2', get: function get() { return 3; } }, { key: 'N3', get: function get() { return 40; } }, { key: 'N4', get: function get() { return 10; } }]); function Frame(options) {
classCallCheck(this, Frame); this._badness = []; this._level = ErrorCorrection.LEVELS[options.level]; this._polynomial = []; this._value = options.value; this._valueLength = this._value.length; this._version = 0; this._stringBuffer = this._value.slice(0); var dataBlock = void 0; var eccBlock = void 0; var neccBlock1 = void 0; var neccBlock2 = void 0; while (this._version < 40) { this._version++; var index = (this._level - 1) * 4 + (this._version - 1) * 16; neccBlock1 = ErrorCorrection.BLOCKS[index++]; neccBlock2 = ErrorCorrection.BLOCKS[index++]; dataBlock = ErrorCorrection.BLOCKS[index++]; eccBlock = ErrorCorrection.BLOCKS[index]; index = dataBlock * (neccBlock1 + neccBlock2) + neccBlock2 - 3 + (this._version <= 9); if (this._valueLength <= index) { break; } }
this._dataBlock = dataBlock; this._eccBlock = eccBlock; this._neccBlock1 = neccBlock1; this._neccBlock2 = neccBlock2; this.width = 17 + 4 * this._version; this.buffer = Frame._createArray(this.width * this.width); this._ecc = Frame._createArray(this._dataBlock + (this._dataBlock + this._eccBlock) * (this._neccBlock1 + this._neccBlock2) + this._neccBlock2); this._mask = Frame._createArray((this.width * (this.width + 1) + 1) / 2); this._insertFinders(); this._insertAlignments(); this.buffer[8 + this.width * (this.width - 8)] = 1; this._insertTimingGap(); this._reverseMask(); this._insertTimingRowAndColumn(); this._insertVersion(); this._syncMask(); this._convertBitStream(this._stringBuffer.length); this._calculatePolynomial(); this._appendEccToData(); this._interleaveBlocks(); this._pack(); this._finish();
}
createClass(Frame, [{
key: '_addAlignment', value: function _addAlignment(x, y) {
this.buffer[x + this.width * y] = 1; for (var i = -2; i < 2; i++) { this.buffer[x + i + this.width * (y - 2)] = 1; this.buffer[x - 2 + this.width * (y + i + 1)] = 1; this.buffer[x + 2 + this.width * (y + i)] = 1; this.buffer[x + i + 1 + this.width * (y + 2)] = 1; }
    for (var _i = 0; _i < 2; _i++) { this._setMask(x - 1, y + _i); this._setMask(x + 1, y - _i); this._setMask(x - _i, y - 1); this._setMask(x + _i, y + 1); }
}
}, {
key: '_appendData', value: function _appendData(data, dataLength, ecc, eccLength) {
    for (var i = 0; i < eccLength; i++) { this._stringBuffer[ecc + i] = 0; }
    for (var _i2 = 0; _i2 < dataLength; _i2++) {
        var bit = Galois.LOG[this._stringBuffer[data + _i2] ^ this._stringBuffer[ecc]]; if (bit !== 255) { for (var j = 1; j < eccLength; j++) { this._stringBuffer[ecc + j - 1] = this._stringBuffer[ecc + j] ^ Galois.EXPONENT[Frame._modN(bit + this._polynomial[eccLength - j])]; } } else { for (var _j = ecc; _j < ecc + eccLength; _j++) { this._stringBuffer[_j] = this._stringBuffer[_j + 1]; } }
        this._stringBuffer[ecc + eccLength - 1] = bit === 255 ? 0 : Galois.EXPONENT[Frame._modN(bit + this._polynomial[0])];
    }
}
}, {
key: '_appendEccToData', value: function _appendEccToData() {
    var data = 0; var ecc = this._calculateMaxLength(); for (var i = 0; i < this._neccBlock1; i++) { this._appendData(data, this._dataBlock, ecc, this._eccBlock); data += this._dataBlock; ecc += this._eccBlock; }
    for (var _i3 = 0; _i3 < this._neccBlock2; _i3++) { this._appendData(data, this._dataBlock + 1, ecc, this._eccBlock); data += this._dataBlock + 1; ecc += this._eccBlock; }
}
}, {
key: '_applyMask', value: function _applyMask(mask) {
    var width = this.width; switch (mask) {
        case 0: for (var y = 0; y < width; y++) { for (var x = 0; x < width; x++) { if (!(x + y & 1) && !this._isMasked(x, y)) { this.buffer[x + y * width] ^= 1; } } }
            break; case 1: for (var _y = 0; _y < width; _y++) { for (var _x = 0; _x < width; _x++) { if (!(_y & 1) && !this._isMasked(_x, _y)) { this.buffer[_x + _y * width] ^= 1; } } }
            break; case 2: for (var _y2 = 0; _y2 < width; _y2++) {
                for (var r3x = 0, _x2 = 0; _x2 < width; _x2++ , r3x++) {
                    if (r3x === 3) { r3x = 0; }
                    if (!r3x && !this._isMasked(_x2, _y2)) { this.buffer[_x2 + _y2 * width] ^= 1; }
                }
            }
            break; case 3: for (var r3y = 0, _y3 = 0; _y3 < width; _y3++ , r3y++) {
                if (r3y === 3) { r3y = 0; }
                for (var _r3x = r3y, _x3 = 0; _x3 < width; _x3++ , _r3x++) {
                    if (_r3x === 3) { _r3x = 0; }
                    if (!_r3x && !this._isMasked(_x3, _y3)) { this.buffer[_x3 + _y3 * width] ^= 1; }
                }
            }
            break; case 4: for (var _y4 = 0; _y4 < width; _y4++) {
                for (var _r3x2 = 0, _r3y = _y4 >> 1 & 1, _x4 = 0; _x4 < width; _x4++ , _r3x2++) {
                    if (_r3x2 === 3) { _r3x2 = 0; _r3y = !_r3y; }
                    if (!_r3y && !this._isMasked(_x4, _y4)) { this.buffer[_x4 + _y4 * width] ^= 1; }
                }
            }
            break; case 5: for (var _r3y2 = 0, _y5 = 0; _y5 < width; _y5++ , _r3y2++) {
                if (_r3y2 === 3) { _r3y2 = 0; }
                for (var _r3x3 = 0, _x5 = 0; _x5 < width; _x5++ , _r3x3++) {
                    if (_r3x3 === 3) { _r3x3 = 0; }
                    if (!((_x5 & _y5 & 1) + !(!_r3x3 | !_r3y2)) && !this._isMasked(_x5, _y5)) { this.buffer[_x5 + _y5 * width] ^= 1; }
                }
            }
            break; case 6: for (var _r3y3 = 0, _y6 = 0; _y6 < width; _y6++ , _r3y3++) {
                if (_r3y3 === 3) { _r3y3 = 0; }
                for (var _r3x4 = 0, _x6 = 0; _x6 < width; _x6++ , _r3x4++) {
                    if (_r3x4 === 3) { _r3x4 = 0; }
                    if (!(_x6 & _y6 & 1 + (_r3x4 && _r3x4 === _r3y3) & 1) && !this._isMasked(_x6, _y6)) { this.buffer[_x6 + _y6 * width] ^= 1; }
                }
            }
            break; case 7: for (var _r3y4 = 0, _y7 = 0; _y7 < width; _y7++ , _r3y4++) {
                if (_r3y4 === 3) { _r3y4 = 0; }
                for (var _r3x5 = 0, _x7 = 0; _x7 < width; _x7++ , _r3x5++) {
                    if (_r3x5 === 3) { _r3x5 = 0; }
                    if (!((_r3x5 && _r3x5 === _r3y4) + (_x7 + _y7 & 1) & 1) && !this._isMasked(_x7, _y7)) { this.buffer[_x7 + _y7 * width] ^= 1; }
                }
            }
            break;
    }
}
}, { key: '_calculateMaxLength', value: function _calculateMaxLength() { return this._dataBlock * (this._neccBlock1 + this._neccBlock2) + this._neccBlock2; } }, {
key: '_calculatePolynomial', value: function _calculatePolynomial() {
this._polynomial[0] = 1; for (var i = 0; i < this._eccBlock; i++) {
this._polynomial[i + 1] = 1; for (var j = i; j > 0; j--) { this._polynomial[j] = this._polynomial[j] ? this._polynomial[j - 1] ^ Galois.EXPONENT[Frame._modN(Galois.LOG[this._polynomial[j]] + i)] : this._polynomial[j - 1]; }
    this._polynomial[0] = Galois.EXPONENT[Frame._modN(Galois.LOG[this._polynomial[0]] + i)];
}
    for (var _i4 = 0; _i4 <= this._eccBlock; _i4++) { this._polynomial[_i4] = Galois.LOG[this._polynomial[_i4]]; }
}
}, {
key: '_checkBadness', value: function _checkBadness() {
    var bad = 0; var width = this.width; for (var y = 0; y < width - 1; y++) { for (var x = 0; x < width - 1; x++) { if (this.buffer[x + width * y] && this.buffer[x + 1 + width * y] && this.buffer[x + width * (y + 1)] && this.buffer[x + 1 + width * (y + 1)] || !(this.buffer[x + width * y] || this.buffer[x + 1 + width * y] || this.buffer[x + width * (y + 1)] || this.buffer[x + 1 + width * (y + 1)])) { bad += Frame.N2; } } }
    var bw = 0; for (var _y8 = 0; _y8 < width; _y8++) {
        var h = 0; this._badness[0] = 0; for (var b = 0, _x8 = 0; _x8 < width; _x8++) {
            var b1 = this.buffer[_x8 + width * _y8]; if (b === b1) { this._badness[h]++; } else { this._badness[++h] = 1; }
            b = b1; bw += b ? 1 : -1;
        }
        bad += this._getBadness(h);
    }
    if (bw < 0) { bw = -bw; }
    var count = 0; var big = bw; big += big << 2; big <<= 1; while (big > width * width) { big -= width * width; count++; }
    bad += count * Frame.N4; for (var _x9 = 0; _x9 < width; _x9++) {
        var _h = 0; this._badness[0] = 0; for (var _b = 0, _y9 = 0; _y9 < width; _y9++) {
            var _b2 = this.buffer[_x9 + width * _y9]; if (_b === _b2) { this._badness[_h]++; } else { this._badness[++_h] = 1; }
            _b = _b2;
        }
        bad += this._getBadness(_h);
    }
    return bad;
}
}, {
key: '_convertBitStream', value: function _convertBitStream(length) {
    for (var i = 0; i < length; i++) { this._ecc[i] = this._stringBuffer.charCodeAt(i); }
    this._stringBuffer = this._ecc.slice(0); var maxLength = this._calculateMaxLength(); if (length >= maxLength - 2) { length = maxLength - 2; if (this._version > 9) { length--; } }
    var index = length; if (this._version > 9) {
    this._stringBuffer[index + 2] = 0; this._stringBuffer[index + 3] = 0; while (index--) { var bit = this._stringBuffer[index]; this._stringBuffer[index + 3] |= 255 & bit << 4; this._stringBuffer[index + 2] = bit >> 4; }
        this._stringBuffer[2] |= 255 & length << 4; this._stringBuffer[1] = length >> 4; this._stringBuffer[0] = 0x40 | length >> 12;
    } else {
    this._stringBuffer[index + 1] = 0; this._stringBuffer[index + 2] = 0; while (index--) { var _bit = this._stringBuffer[index]; this._stringBuffer[index + 2] |= 255 & _bit << 4; this._stringBuffer[index + 1] = _bit >> 4; }
        this._stringBuffer[1] |= 255 & length << 4; this._stringBuffer[0] = 0x40 | length >> 4;
    }
    index = length + 3 - (this._version < 10); while (index < maxLength) { this._stringBuffer[index++] = 0xec; this._stringBuffer[index++] = 0x11; }
}
}, {
key: '_getBadness', value: function _getBadness(length) {
    var badRuns = 0; for (var i = 0; i <= length; i++) { if (this._badness[i] >= 5) { badRuns += Frame.N1 + this._badness[i] - 5; } }
    for (var _i5 = 3; _i5 < length - 1; _i5 += 2) { if (this._badness[_i5 - 2] === this._badness[_i5 + 2] && this._badness[_i5 + 2] === this._badness[_i5 - 1] && this._badness[_i5 - 1] === this._badness[_i5 + 1] && this._badness[_i5 - 1] * 3 === this._badness[_i5] && (this._badness[_i5 - 3] === 0 || _i5 + 3 > length || this._badness[_i5 - 3] * 3 >= this._badness[_i5] * 4 || this._badness[_i5 + 3] * 3 >= this._badness[_i5] * 4)) { badRuns += Frame.N3; } }
    return badRuns;
}
}, {
key: '_finish', value: function _finish() {
this._stringBuffer = this.buffer.slice(0); var bit = 0; var i = void 0; var mask = 30000; for (i = 0; i < 8; i++) {
    this._applyMask(i); var currentMask = this._checkBadness(); if (currentMask < mask) { mask = currentMask; bit = i; }
    if (bit === 7) { break; }
    this.buffer = this._stringBuffer.slice(0);
}
    if (bit !== i) { this._applyMask(bit); }
    mask = ErrorCorrection.FINAL_FORMAT[bit + (this._level - 1 << 3)]; for (i = 0; i < 8; i++ , mask >>= 1) { if (mask & 1) { this.buffer[this.width - 1 - i + this.width * 8] = 1; if (i < 6) { this.buffer[8 + this.width * i] = 1; } else { this.buffer[8 + this.width * (i + 1)] = 1; } } }
    for (i = 0; i < 7; i++ , mask >>= 1) { if (mask & 1) { this.buffer[8 + this.width * (this.width - 7 + i)] = 1; if (i) { this.buffer[6 - i + this.width * 8] = 1; } else { this.buffer[7 + this.width * 8] = 1; } } }
}
}, {
key: '_interleaveBlocks', value: function _interleaveBlocks() {
    var maxLength = this._calculateMaxLength(); var i = void 0; var k = 0; for (i = 0; i < this._dataBlock; i++) {
        for (var j = 0; j < this._neccBlock1; j++) { this._ecc[k++] = this._stringBuffer[i + j * this._dataBlock]; }
        for (var _j2 = 0; _j2 < this._neccBlock2; _j2++) { this._ecc[k++] = this._stringBuffer[this._neccBlock1 * this._dataBlock + i + _j2 * (this._dataBlock + 1)]; }
    }
    for (var _j3 = 0; _j3 < this._neccBlock2; _j3++) { this._ecc[k++] = this._stringBuffer[this._neccBlock1 * this._dataBlock + i + _j3 * (this._dataBlock + 1)]; }
    for (i = 0; i < this._eccBlock; i++) { for (var _j4 = 0; _j4 < this._neccBlock1 + this._neccBlock2; _j4++) { this._ecc[k++] = this._stringBuffer[maxLength + i + _j4 * this._eccBlock]; } }
    this._stringBuffer = this._ecc;
}
}, {
key: '_insertAlignments', value: function _insertAlignments() {
    var width = this.width; if (this._version > 1) {
        var i = Alignment.BLOCK[this._version]; var y = width - 7; for (; ;) {
            var x = width - 7; while (x > i - 3) {
                this._addAlignment(x, y); if (x < i) { break; }
                x -= i;
            }
            if (y <= i + 9) { break; }
            y -= i; this._addAlignment(6, y); this._addAlignment(y, 6);
        }
    }
}
}, {
key: '_insertFinders', value: function _insertFinders() {
    var width = this.width; for (var i = 0; i < 3; i++) {
        var j = 0; var y = 0; if (i === 1) { j = width - 7; }
        if (i === 2) { y = width - 7; }
        this.buffer[y + 3 + width * (j + 3)] = 1; for (var x = 0; x < 6; x++) { this.buffer[y + x + width * j] = 1; this.buffer[y + width * (j + x + 1)] = 1; this.buffer[y + 6 + width * (j + x)] = 1; this.buffer[y + x + 1 + width * (j + 6)] = 1; }
        for (var _x10 = 1; _x10 < 5; _x10++) { this._setMask(y + _x10, j + 1); this._setMask(y + 1, j + _x10 + 1); this._setMask(y + 5, j + _x10); this._setMask(y + _x10 + 1, j + 5); }
        for (var _x11 = 2; _x11 < 4; _x11++) { this.buffer[y + _x11 + width * (j + 2)] = 1; this.buffer[y + 2 + width * (j + _x11 + 1)] = 1; this.buffer[y + 4 + width * (j + _x11)] = 1; this.buffer[y + _x11 + 1 + width * (j + 4)] = 1; }
    }
}
}, {
key: '_insertTimingGap', value: function _insertTimingGap() {
    var width = this.width; for (var y = 0; y < 7; y++) { this._setMask(7, y); this._setMask(width - 8, y); this._setMask(7, y + width - 7); }
    for (var x = 0; x < 8; x++) { this._setMask(x, 7); this._setMask(x + width - 8, 7); this._setMask(x, width - 8); }
}
}, { key: '_insertTimingRowAndColumn', value: function _insertTimingRowAndColumn() { var width = this.width; for (var x = 0; x < width - 14; x++) { if (x & 1) { this._setMask(8 + x, 6); this._setMask(6, 8 + x); } else { this.buffer[8 + x + width * 6] = 1; this.buffer[6 + width * (8 + x)] = 1; } } } }, { key: '_insertVersion', value: function _insertVersion() { var width = this.width; if (this._version > 6) { var i = Version.BLOCK[this._version - 7]; var j = 17; for (var x = 0; x < 6; x++) { for (var y = 0; y < 3; y++ , j--) { if (1 & (j > 11 ? this._version >> j - 12 : i >> j)) { this.buffer[5 - x + width * (2 - y + width - 11)] = 1; this.buffer[2 - y + width - 11 + width * (5 - x)] = 1; } else { this._setMask(5 - x, 2 - y + width - 11); this._setMask(2 - y + width - 11, 5 - x); } } } } } }, { key: '_isMasked', value: function _isMasked(x, y) { var bit = Frame._getMaskBit(x, y); return this._mask[bit] === 1; } }, {
key: '_pack', value: function _pack() {
    var x = this.width - 1; var y = this.width - 1; var k = 1; var v = 1; var length = (this._dataBlock + this._eccBlock) * (this._neccBlock1 + this._neccBlock2) + this._neccBlock2; for (var i = 0; i < length; i++) {
        var bit = this._stringBuffer[i]; for (var j = 0; j < 8; j++ , bit <<= 1) {
            if (0x80 & bit) { this.buffer[x + this.width * y] = 1; }
            do {
                if (v) { x--; } else { x++; if (k) { if (y !== 0) { y--; } else { x -= 2; k = !k; if (x === 6) { x--; y = 9; } } } else if (y !== this.width - 1) { y++; } else { x -= 2; k = !k; if (x === 6) { x--; y -= 8; } } }
                v = !v;
            } while (this._isMasked(x, y));
        }
    }
}
}, {
key: '_reverseMask', value: function _reverseMask() {
    var width = this.width; for (var x = 0; x < 9; x++) { this._setMask(x, 8); }
    for (var _x12 = 0; _x12 < 8; _x12++) { this._setMask(_x12 + width - 8, 8); this._setMask(8, _x12); }
    for (var y = 0; y < 7; y++) { this._setMask(8, y + width - 7); }
}
}, { key: '_setMask', value: function _setMask(x, y) { var bit = Frame._getMaskBit(x, y); this._mask[bit] = 1; } }, { key: '_syncMask', value: function _syncMask() { var width = this.width; for (var y = 0; y < width; y++) { for (var x = 0; x <= y; x++) { if (this.buffer[x + width * y]) { this._setMask(x, y); } } } } }]); return Frame;
}(); var ImageRenderer = function (_Renderer) {
inherits(ImageRenderer, _Renderer); function ImageRenderer() { classCallCheck(this, ImageRenderer); return possibleConstructorReturn(this, Object.getPrototypeOf(ImageRenderer).apply(this, arguments)); }
createClass(ImageRenderer, [{ key: 'draw', value: function draw() { var qrious = this.qrious; qrious.image.src = qrious.toDataURL(); } }, { key: 'reset', value: function reset() { var qrious = this.qrious; qrious.image.src = ''; } }, { key: 'resize', value: function resize() { var qrious = this.qrious; var image = qrious.image; image.width = qrious.size; image.height = qrious.size; } }]); return ImageRenderer;
}(Renderer); var ServiceManager = function () {
function ServiceManager() { classCallCheck(this, ServiceManager); this._services = {}; }
createClass(ServiceManager, [{
key: "getService", value: function getService(name) {
    var service = this._services[name]; if (!service) { throw new Error("Service is not being managed with name: " + name); }
    return service;
}
}, {
key: "setService", value: function setService(name, service) {
    if (this._services[name]) { throw new Error("Service is already managed with name: " + name); }
    if (service) { this._services[name] = service; }
}
}]); return ServiceManager;
}(); var QRious = function () {
createClass(QRious, null, [{ key: 'use', value: function use(service) { QRious._serviceManager.setService(service.getName(), service); } }, { key: '_parseOptions', value: function _parseOptions(options) { options = Object.assign({}, QRious.DEFAULTS, options); options.level = Utilities.toUpperCase(options.level); options.size = Math.abs(options.size); return options; } }, { key: 'DEFAULTS', get: function get() { return { background: 'white', foreground: 'black', level: 'L', mime: 'image/png', size: 100, value: '' }; } }, { key: 'VERSION', get: function get() { return '2.0.0'; } }]); function QRious(options) { classCallCheck(this, QRious); options = QRious._parseOptions(options); Utilities.privatize(this, options); var element = this._element; var elementService = QRious._serviceManager.getService('element'); this.canvas = element && elementService.isCanvas(element) ? element : elementService.createCanvas(); this.canvas.qrious = this; this.image = element && elementService.isImage(element) ? element : elementService.createImage(); this.image.qrious = this; this._renderers = [new CanvasRenderer(this), new ImageRenderer(this)]; this.update(); }
createClass(QRious, [{ key: 'toDataURL', value: function toDataURL(mime) { return this.canvas.toDataURL(mime || this.mime); } }, { key: 'update', value: function update() { var frame = new Frame({ level: this.level, value: this.value }); this._renderers.forEach(function (renderer) { return renderer.render(frame); }); } }, { key: 'background', get: function get() { return this._background; }, set: function set(background) { var changed = Utilities.setter(this, '_background', background, QRious.DEFAULTS.background); if (changed) { this.update(); } } }, { key: 'foreground', get: function get() { return this._foreground; }, set: function set(foreground) { var changed = Utilities.setter(this, '_foreground', foreground, QRious.DEFAULTS.foreground); if (changed) { this.update(); } } }, { key: 'level', get: function get() { return this._level; }, set: function set(level) { var changed = Utilities.setter(this, '_level', level, QRious.DEFAULTS.level, Utilities.toUpperCase); if (changed) { this.update(); } } }, { key: 'mime', get: function get() { return this._mime; }, set: function set(mime) { var changed = Utilities.setter(this, '_mime', mime, QRious.DEFAULTS.mime); if (changed) { this.update(); } } }, { key: 'size', get: function get() { return this._size; }, set: function set(size) { var changed = Utilities.setter(this, '_size', size, QRious.DEFAULTS.size, Math.abs); if (changed) { this.update(); } } }, { key: 'value', get: function get() { return this._value; }, set: function set(value) { var changed = Utilities.setter(this, '_value', value, QRious.DEFAULTS.value); if (changed) { this.update(); } } }]); return QRious;
}(); QRious._serviceManager = new ServiceManager(); QRious.use(new BrowserElementService()); return QRious;
}));



</script>


</body>
</html>
