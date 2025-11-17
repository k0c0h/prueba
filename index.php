<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        background: linear-gradient(120deg, #4e73df, #1cc88a);
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      .card {
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(240, 209, 107, 0.568);
        animation: fadeIn 1s ease-in-out;
      }
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .btn-custom {
        background: #1cc88a;
        color: white;
        font-weight: bold;
        padding: 20px 20px 20px 20px;
      }
      .btn-custom:hover {
        background: #17a673;
      }
    </style>
  </head>
  <body>
    <div>
      <h1>BUILDS</h1>
    </div>

    <a href="./app/read_all.php">
      <i class="bi bi-card-list me-2"></i> Read data
    </a>
    <br />
    <br />
    <hr />
    <footer>Copyright by Kerlly Chiriboga</footer>
  </body>
</html>
