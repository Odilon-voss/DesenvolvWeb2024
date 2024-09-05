const resultado = document.getElementById('resultado');
let currentInput = '';
let operator = '';
let previousInput = '';

document.querySelectorAll('.botao').forEach(button => {
    button.addEventListener('click', () => {
        const value = button.getAttribute('data-value');

        if (value === 'C') {
            currentInput = '';
            previousInput = '';
            operator = '';
            resultado.textContent = '';
        } else if (value === 'L') {
            currentInput = currentInput.slice(0, -1);
            resultado.textContent = currentInput;
        } else if (value === '=') {
            if (currentInput && previousInput) {
                try {
                    const expression = previousInput + operator + currentInput;
                    const calculated = new Function('return ' + expression)();
                    resultado.textContent = calculated;
                    currentInput = calculated.toString();
                    previousInput = '';
                    operator = '';
                } catch (e) {
                    resultado.textContent = 'Error';
                    currentInput = '';
                    previousInput = '';
                    operator = '';
                }
            }
        } else if (['+', '-', '*', '/'].includes(value)) {
            if (currentInput) {
                if (previousInput && operator) {
                    const expression = previousInput + operator + currentInput;
                    try {
                        const calculated = new Function('return ' + expression)();
                        previousInput = calculated.toString();
                    } catch (e) {
                        resultado.textContent = 'Error';
                        currentInput = '';
                        previousInput = '';
                        operator = '';
                        return;
                    }
                } else {
                    previousInput = currentInput;
                }
                operator = value;
                currentInput = '';
                resultado.textContent = '';
            }
        } else {
            currentInput += value;
            resultado.textContent = currentInput;
        }
    });
});
