# Contenido Programático - Curso de PHP Básico

# Módulo 1: Introducción a PHP y Fundamentos

**Objetivo:** Comprender el entorno de ejecución de PHP, la sintaxis básica, la declaración de variables y los tipos de datos primarios.

* **1.1. Sintaxis Básica**

    * Etiquetas de apertura y cierre (<?php ?>).
    * Salida de datos (echo, print, var_dump).
    * Comentarios de una y múltiples líneas.

* **1.2. Variables y Tipos de Datos**

    * Reglas de nombres de variables.
    * Tipos primitivos: string, int, float, bool, null.
    * Concatenación e interpolación de variables.
    * **Archivo práctico:** 01_sintaxis_y_variables.php

---

# Módulo 2: Operadores y Expresiones

**Objetivo:** Dominar los operadores aritméticos, de comparación y lógicos para la construcción de expresiones complejas.

* **2.1. Operadores Aritméticos**

    * Suma, resta, multiplicación, división, módulo y exponenciación.

* **2.2. Operadores de Comparación y Lógicos**

    * Igualdad estricta (===) vs. débil (==).
    * Operadores lógicos (&&, ||, !).

    * **Archivo práctico:** 02_operadores.php

---

# Módulo 3: Estructuras Condicionales

**Objetivo:** Controlar el flujo de ejecución del programa mediante decisiones lógicas.

* **3.1. Condicionales Simples y Múltiples**

    * Sentencias if, else, elseif.

* **3.2. Estructura de Selección Múltiple**

    * Uso eficiente de switch / case y valor por defecto (default).

    * **Archivo práctico:** 03_estructuras_control.php

---

# Módulo 4: Bucles y Constantes

**Objetivo:** Automatizar tareas repetitivas y gestionar valores inmutables en la aplicación.

* **4.1. Estructuras Iterativas**

    * Bucles for, while, do-while.
    * Bucle foreach para Arreglos Indexados y Asociativos.

* **4.2. Definición de Constantes**

    * Uso de define() y la palabra clave const.

    * **Archivo práctico:** 04_bucles_y_constantes.php

---

# Módulo 5: Arreglos y Colecciones de Datos

**Objetivo:** Almacenar, manipular y ordenar estructuras de datos compuestas.

* **5.1. Operaciones Fundamentales sobre Arreglos**

    * Agregar elementos (array_push, array_unshift).
    * Eliminar elementos (unset).
    * Conteo e inspección de arreglos (count, print_r).

* **5.2. Ordenamiento de Arreglos**

    * Reordenamiento por valores y claves (sort, asort).
    * **Archivo práctico:** 05_arreglos.php

---

# Módulo 6: Manipulación de Cadenas de Texto

**Objetivo:** Transformar y procesar textos mediante las funciones integradas de PHP.

**6.1. Funciones de Transformación y Limpieza**

   * Normalización de caso (strtolower, strtoupper, ucfirst, ucwords).
   * Limpieza de espacios y caracteres especiales (trim, ltrim, rtrim).

**6.2. División y Conversión de Cadenas**

   * Separar texto en arreglos (explode, str_split).
   * Repetición y formateo de cadenas (str_repeat).
   * **Archivo práctico:** 06_cadenas.php

---

# Módulo 7: Funciones Matemáticas Integradas

**Objetivo:** Realizar cálculos numéricos complejos, redondeos y generación de números aleatorios.

**7.1. Constantes y Funciones Aritméticas Básicas**

   * Constante M_PI, funciones pi(), pow(), sqrt().
   * Mínimos y máximos (min, max).

**7.2. Redondeo, Números Aleatorios y Caso Práctico**

   * Estrategias de redondeo con round().
   * Generación de números aleatorios con rand().
   * Resolución práctica de la fórmula cuadrática (Ecuación de segundo grado).
   * **Archivo práctico:** 07_funciones_matematicas.php

---

# Módulo 8: Sistema de Archivos y Directorios

**Objetivo:** Leer, escribir y explorar el sistema de archivos del servidor.

**8.1. Manejo de Archivos (I/O)**

   * Apertura, lectura, escritura y cierre seguro (fopen, fwrite, fread, fclose).
   * Obtención de metadatos de archivos (stat, filesize).

**8.2. Navegación e Inspección de Directorios**

   * Obtención y cambio del directorio actual (getcwd, chdir).
   * Lectura de archivos en directorio (scandir, opendir, readdir).
   * **Archivo práctico:** 08_sistema_archivos.php