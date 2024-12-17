# Hook para WHMCS corrector y estandarizador de datos previo al guardado

Este Hook para WHMCS 8.11.2 estandariza y formatea automáticamente los datos ingresados en los formularios de registro y checkout antes de guardarlos en la base de datos. La funcionalidad incluye:

# Capitalización Correcta:
- Los campos nombre, apellido, dirección, ciudad y provincia/estado se ajustan para que cada palabra inicie con mayúscula y el resto se mantenga en minúsculas, independientemente de cómo el usuario los ingrese.

# Estandarización de Empresa y Correo Electrónico:
- El campo empresa se convierte completamente a mayúsculas.
- El campo email se guarda en minúsculas.

Este hook garantiza una base de datos más organizada y coherente, facilitando su uso en procesos futuros.

# English

This Hook for WHMCS 8.11.2 standardizes and formats the data entered in the registration and checkout forms before saving it to the database. The functionality includes:

# Proper Capitalization:
- The first name, last name, address, city, and state/province fields are adjusted so that each word starts with an uppercase letter while the rest remain in lowercase, regardless of how the user enters the data.

# Standardization of Company and Email Fields:
- The company field is converted entirely to uppercase.
- The email field is saved in lowercase.
- This hook ensures a more organized and consistent database, making it easier for future use.

# Uso / Use
- Sube este hook en el directorio "/includes/hooks/" de tu WHMCS.
- Upload this hook into your WHMCS directory: "includes/hooks/" 
