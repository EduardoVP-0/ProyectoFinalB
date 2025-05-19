<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Paquetes Turísticos</title>
    <link rel="icon" href="./vista/img/icono.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #F4F7FC;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            background: #FFF;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 30px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #4B5881;
            font-size: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button-container button.add {
            background: linear-gradient(to right, #28A745, #4CAF50);
            color: white;
        }

        .button-container button.add:hover {
            background: linear-gradient(to right, #4CAF50, #28A745);
            transform: scale(1.1);
        }

        .action-buttons button {
            background: linear-gradient(to right, #FF8A00, #FF6F00);
            color: white;
            padding: 8px 16px;
            font-size: 13px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 45%;
            transition: background 0.3s ease, transform 0.3s ease;
            margin-bottom: 10px; 
        }

        .action-buttons button.edit {
            background: linear-gradient(to right, #FFC107, #FFB300);
        }

        .action-buttons button.edit:hover {
            background: linear-gradient(to right, #FFB300, #FFC107);
            transform: scale(1.05);
        }

        .action-buttons button.delete {
            background: linear-gradient(to right, #DC3545, #C82333);
        }

        .action-buttons button.delete:hover {
            background: linear-gradient(to right, #C82333, #DC3545);
            transform: scale(1.05);
        }

        .action-buttons button:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .action-buttons .add-itinerary {
            background: linear-gradient(to right, #007BFF, #0056b3);
            color: white;
            padding: 9px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 92%; 
            transition: background 0.3s ease, transform 0.3s ease;
            margin-top: 0px; 
        }

        .action-buttons .add-itinerary:hover {
            background: linear-gradient(to right, #0056b3, #007BFF);
            transform: scale(1.05);
        }

        .packages-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .package-card {
            background-color: #FFF;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .package-info {
            margin-bottom: 15px;
        }

        .package-info label {
            font-weight: 600;
            color: #505D89;
            font-size: 13px;
        }

        .package-info span {
            display: block;
            font-size: 14px;
            color: #333;
            margin-top: 5px;
        }
        
        .price-duration-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .price-duration-container .package-info {
            margin-bottom: 0;
            width: 48%; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-container">
            <h1>Gestión de Paquetes Turísticos</h1>
            <div class="button-container">
                <a href="RegistroA.php">
                    <button class="add">Agregar Paquete</button>
                </a>
            </div>
        </div>

        <div class="packages-container">
            <div class="package-card">
                <div class="package-info">
                    <label>Nombre del Paquete</label>
                    <span>Chiapas Bonito</span>
                </div>
                <div class="package-info">
                    <label>Destino</label>
                    <span>Lagunas de Montebello</span>
                </div>
                <div class="price-duration-container">
                    <div class="package-info">
                      <label>Precio</label>
                      <span>$4,500</span>
                    </div>
                    <div class="package-info">
                      <label>Duración</label>
                      <span>5 días</span>
                    </div>
                </div>
              <div class="package-info">
                <label>Fecha de Creación</label>
                <span>2025-05-19</span>
              </div>
              <div class="action-buttons">
                <button class="edit">Editar</button>
                <button class="delete">Eliminar</button>
                <button class="add-itinerary">Agregar Itinerario</button> 
              </div>
          </div>

        <div class="package-card">
          <div class="package-info">
            <label>Nombre del Paquete</label>
            <span>Chiapas Esencial</span>
          </div>
          <div class="package-info">
            <label>Destino</label>
            <span>Zona Arqueológica de Palenque</span>
          </div>
          <div class="price-duration-container">
            <div class="package-info">
              <label>Precio</label>
              <span>$2,990</span>
            </div>
            <div class="package-info">
              <label>Duración</label>
              <span>4 días</span>
            </div>
          </div>
          <div class="package-info">
            <label>Fecha de Creación</label>
            <span>2025-05-18</span>
          </div>
          <div class="action-buttons">
            <button class="edit">Editar</button>
            <button class="delete">Eliminar</button>
            <button class="add-itinerary">Agregar Itinerario</button> 
          </div>
        </div>
  </div>
</body>
</html>