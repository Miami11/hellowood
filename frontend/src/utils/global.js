/**
 * 把數字轉為金錢格式
 * 
 * (1234).format() -> "1,234"
 * (12345).format(2) -> "12,345.00"
 * (123456.7).format(3, 2) -> "12,34,56.700"
 * (123456.789).format(2, 4) -> "12,3456.79"
 * 
 * @param integer n: length of decimal
 * @param integer x: length of sections
 */
Number.prototype.format = function(n, x) {
    let re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
}

/**
 * 驗證是否為英數字
 */
String.prototype.testValid = function() {
    let reg = /^[\d|a-zA-Z]+$/;
    return reg.test(this);
}

/**
 * 每四個數字填充一個空格，可用於銀行卡
 */
String.prototype.addSpace = function() {
    return this.replace(/[\s]/g, '').replace(/(\d{4})(?=\d)/g, '$1 ');
}
