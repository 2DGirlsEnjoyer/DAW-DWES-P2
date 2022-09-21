En el ejercicio de PHP de la clase de Desarrollo Web en Entorno Servidor, he desarrollado un código donde según el precio de la compra (supuestamente dentro de una página web de productos informáticos, PComponentes) almacenada en la variables "$shopping_cart", supondrá un precio de envío u otro, este se encontrará dentro de "$shipping_price", y según el tipo de componente que se compre, habrá un tipo de envío, por ejemplo si se compran unos cables por un precio total inferior a 20, no se podrá enviar.


Realizando el código no he tenido realmente ningún tipo de problema debido a que todo estaba muy bien explicado en el power point de PHP, además de estar muy detallada la forma en que se había de hacer el ejercicio.

He decido usar 3 variables:

- shipping_price (para almacenar el precio de envío)

- shopping_cart (para almacenar el precio total de la compra)

- tipo (para almacenar el tipo de producto que se compra)


Para las condiciones que se especificaban en el ejercicio he decidio usar if's, y según lo que pedían he utilizado unos operadores de comparación u otros, entre los que se encuentran, "<=", ">=", "!=". Y para mostrar el precio del envío según la condicion que se cumpliera, usaba un "echo" para poder mostrar por pantalla un texto, seguidamente lo acompañaba de "." para concatenar y poder poner ahí la variable "shipping_price" que nos mostraba el precio de envío. 