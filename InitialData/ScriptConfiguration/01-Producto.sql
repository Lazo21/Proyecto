DROP TABLE IF EXISTS #ProductoTemp

SELECT 
IdProducto, Categoria, NombreProducto, Cantidad_Disponible, Caracteristicas, Estado INTO #ProductoTemp
FROM (
VALUES
(1, ' ',' ',100,' ','DISPONIBLE'),
(2, ' ',' ',20,' ','LIMITADO'),
(3, ' ',' ',0,' ','AGOTADO')
)AS TEMP (IdProducto, Categoria, NombreProducto, Cantidad_Disponible, Caracteristicas, Estado)

----ACTUALIZAR DATOS---
UPDATE P SET
  P.Categoria= TM.Categoria,
  P.NombreProducto= TM.NombreProducto,
  P.Cantidad_Disponible= TM.Cantidad_Disponible,
  P.Caracteristicas= TM.Caracteristicas,
  P.Estado= TM.Estado
FROM Dbo.Producto P
INNER JOIN #ProductoTemp TM
    ON P.IdProducto= TM.IdProducto  
    
    ----INSERTAR DATOS---

SET IDENTITY_INSERT dbo.Producto ON

INSERT INTO dbo.Producto(
IdProducto,Categoria, NombreProducto, Cantidad_Disponible, Caracteristicas, Estado)
SELECT
IdProducto, Categoria, NombreProducto, Cantidad_Disponible, Caracteristicas, Estado
FROM #ProductoTemp


EXCEPT
SELECT
IdProducto, Categoria, NombreProducto, Cantidad_Disponible, Caracteristicas, Estado
FROM dbo.Producto


SET IDENTITY_INSERT dbo.Producto OFF

GO