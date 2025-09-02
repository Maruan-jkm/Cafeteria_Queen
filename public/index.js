const express = require("express");
const app = express();
const PORT = process.env.PORT || 8080;

// Sirve archivos estáticos desde la carpeta "public"
app.use(express.static("public"));

app.listen(PORT, () => {
  console.log(`Servidor corriendo en http://localhost:${PORT}`);
});
