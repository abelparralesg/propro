window.onload = function () {
            // Variables
            let baseDeDatos = [
                {
                    id: 1,
                    nombre: 'Ecuavisa',
                    precio: 5
                },
                {
                    id: 2,
                    nombre: 'Rts',
                    precio: 5
                },
                {
                    id: 3,
                    nombre: 'Teleamazonas',
                    precio: 5
                },
                {
                    id: 4,
                    nombre: 'Gama TV',
                    precio: 5
                },
                {
                    id: 5,
                    nombre: 'TC',
                    precio: 5
                },
                {
                    id: 6,
                    nombre: 'Telerama',
                    precio: 5
                },
                {
                    id: 7,
                    nombre: 'Ecuador TV',
                    precio: 5
                },
                {
                    id: 8,
                    nombre: 'Canal Uno',
                    precio: 5
                },
                {
                    id: 9,
                    nombre: 'Warner',
                    precio: 10
                },
                {
                    id: 10,
                    nombre: 'AXN',
                    precio: 10
                },
                {
                    id: 11,
                    nombre: 'TNT Series',
                    precio: 10
                },
                {
                    id: 12,
                    nombre: 'FX',
                    precio: 10
                },
                {
                    id: 13,
                    nombre: 'Universal TV',
                    precio: 10
                },
                {
                    id: 14,
                    nombre: 'Mtv',
                    precio: 10
                },
                {
                    id: 15,
                    nombre: 'TLC  Discovery',
                    precio: 10
                },
                {
                    id: 16,
                    nombre: 'Cartoon Network',
                    precio: 10
                },
                {
                    id: 17,
                    nombre: 'Nick',
                    precio: 10
                },
                {
                    id: 18,
                    nombre: 'Nick-jr',
                    precio: 10
                },
                {
                    id: 19,
                    nombre: 'Disney Channel',
                    precio: 10
                },
                {
                    id: 20,
                    nombre: 'Disney  Junior',
                    precio: 10
                },
                {
                    id: 21,
                    nombre: 'Disney XD',
                    precio: 10
                },
                {
                    id: 22,
                    nombre: 'Discovery Kids',
                    precio: 10
                },
                {
                    id: 23,
                    nombre: 'Boomerang',
                    precio: 10
                },
                {
                    id: 24,
                    nombre: 'TNT',
                    precio: 12
                },
                {
                    id: 25,
                    nombre: 'Golden',
                    precio: 12
                },
                {
                    id: 26,
                    nombre: 'Cinecanal',
                    precio: 12
                },
                {
                    id: 27,
                    nombre: 'Cinemax',
                    precio: 12
                },
                {
                    id: 28,
                    nombre: 'GoldenEdge',
                    precio: 12
                },
                {
                    id: 29,
                    nombre: 'Space',
                    precio: 12
                },
                {
                    id: 30,
                    nombre: 'HBO',
                    precio: 14
                },
                {
                    id: 31,
                    nombre: 'HBO2',
                    precio: 14
                },
                {
                    id: 32,
                    nombre: 'HBO Plus',
                    precio: 14
                },
                {
                    id: 33,
                    nombre: 'HBO Family',
                    precio: 14
                },
                {
                    id: 34,
                    nombre: 'MAX',
                    precio: 14
                },
                {
                    id: 35,
                    nombre: 'MAX Prime',
                    precio: 14
                },
                {
                    id: 36,
                    nombre: 'Fox Sports',
                    precio: 10
                },
                {
                    id: 37,
                    nombre: 'Fox Sports 2',
                    precio: 10
                },
                {
                    id: 38,
                    nombre: 'Fox Sports 3',
                    precio: 10
                },
                {
                    id: 39,
                    nombre: 'ESPN',
                    precio: 10
                },
                {
                    id: 40,
                    nombre: 'ESPN 2',
                    precio: 10
                },
                {
                    id: 41,
                    nombre: 'ESPN 3',
                    precio: 10
                },
                {
                    id: 42,
                    nombre: 'NBA',
                    precio: 10
                },
                {
                    id: 43,
                    nombre: 'Play Boy Tv',
                    precio: 6
                },
                {
                    id: 44,
                    nombre: 'Venus',
                    precio: 6
                },
                {
                    id: 45,
                    nombre: 'Hustler Tv',
                    precio: 6
                },
                {
                    id: 46,
                    nombre: 'Ecuavisa HD',
                    precio: 6
                },
                {
                    id: 47,
                    nombre: 'Warner HD',
                    precio: 12
                },
                {
                    id: 48,
                    nombre: 'AXN HD',
                    precio: 12
                },
                {
                    id: 49,
                    nombre: 'TNT Series HD',
                    precio: 12
                },
                {
                    id: 50,
                    nombre: 'Cartoon Network HD',
                    precio: 12
                },
                {
                    id: 51,
                    nombre: 'Disney Channel HD',
                    precio: 12
                },
                {
                    id: 52,
                    nombre: 'TNT HD',
                    precio: 14
                },
                {
                    id: 53,
                    nombre: 'Cinecanal HD',
                    precio: 14
                },
                {
                    id: 54,
                    nombre: 'Cinemax HD',
                    precio: 16
                },
                {
                    id: 55,
                    nombre: 'Max Prime HD',
                    precio: 16
                },
                {
                    id: 56,
                    nombre: 'Fox Sports HD',
                    precio: 14
                }
            ]
            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            // Funciones
            function renderItems () {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    let miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info['nombre'];
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = info['precio'] + '$';
                    // Boton 
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', anyadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }
            function anyadirCarrito () {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();

            }

            function renderizarCarrito () {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Generamos los Nodos a partir de carrito
                carrito.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right');
                    miNodo.textContent = `${miItem[0]['nombre']} - ${miItem[0]['precio']}$`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.setAttribute('posicion', indice);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito () {
                // Obtenemos la posicion que hay en el boton pulsado
                let posicion = this.getAttribute('posicion');
                // Borramos la posicion que nos interesa
                carrito.splice(posicion, 1);
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal () {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }
            // Eventos

            // Inicio
            renderItems();
        } 