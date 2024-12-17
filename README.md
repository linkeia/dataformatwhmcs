# Hook para WHMCS corrector de data previo al ingreso en la base de datos

Este Hook para WHMCS 8.11.2 estandariza y formatea automáticamente los datos ingresados en los formularios de registro y checkout antes de guardarlos en la base de datos. La funcionalidad incluye:

# Capitalización Correcta:
- Los campos nombre, apellido, dirección, ciudad y provincia/estado se ajustan para que cada palabra inicie con mayúscula y el resto se mantenga en minúsculas, independientemente de cómo el usuario los ingrese.

# Estandarización de Empresa y Correo Electrónico:
- El campo empresa se convierte completamente a mayúsculas.
- El campo email se guarda en minúsculas.

Este hook garantiza una base de datos más organizada y coherente, facilitando su uso en procesos futuros.
