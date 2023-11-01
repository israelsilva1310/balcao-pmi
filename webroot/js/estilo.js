(function () {
    var Contrast = {
        storage: 'contrastState',
        cssClass: 'contrast',
        currentState: null,
        check: checkContrast,
        getState: getContrastState,
        setState: setContrastState,
        toogle: toogleContrast,
        updateView: updateViewContrast
    };

    window.toggleContrast = function () { Contrast.toogle(); };

    Contrast.check();

    function checkContrast() {
        this.updateView();
    }

    function getContrastState() {
        return localStorage.getItem(this.storage) === 'true';
    }

    function setContrastState(state) {
        localStorage.setItem(this.storage, '' + state);
        this.currentState = state;
        this.updateView();
    }

    function updateViewContrast() {
        var body = document.body;

        if (this.currentState === null)
            this.currentState = this.getState();

        if (this.currentState)
            body.classList.add(this.cssClass);
        else
            body.classList.remove(this.cssClass);
    }

    function toogleContrast() {
        this.setState(!this.currentState);
    }

    window.onload = function() {
                var elementBody = document.querySelector('.acessivel');
                var elementBtnIncreaseFont = document.getElementById('increase-font');
                var elementBtnDecreaseFont = document.getElementById('decrease-font');
                // Padrão de tamanho, equivale a 100% do valor definido no Body
                var fontSize = 100;
                // Valor de incremento ou decremento, equivale a 10% do valor do Body
                var increaseDecrease = 10;

                // Evento de click para aumentar a fonte
                elementBtnIncreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize + increaseDecrease;
                    if(fontSize <= 200){
                        elementBody.style.fontSize = fontSize + '%';
                    }
                });

                // Evento de click para diminuir a fonte
                elementBtnDecreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize - increaseDecrease;
                    if(fontSize >= 50){
                        elementBody.style.fontSize = fontSize + '%';
                    }
                });
            }
})();




