/**
 * Под замыканием поимается функция ссылающиеся на внешний контекст среды, это может быть и глобальный контекст
 * В примере есть и глобальное замыкание и замыкание с контекстом-переменых созданым вовремя вызова функции createCounter();
 */
var globalValue = 1;

function createCounter(name) {
    var localValue = 100;

    return function () {
        var stateText;
        stateText = 'name: ' + name + ', g:' + globalValue++ + ', ' + 'l: ' + localValue--;
        console.log(stateText);
    }
}

var c1 = createCounter('c1');

c1();
c1();

// ниже можно увидеть, что во врем вызова функции createCounter() контекст переменых создан заново
var c2 = createCounter('c2');

c2();

c1();