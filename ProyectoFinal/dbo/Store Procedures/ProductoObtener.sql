CREATE PROCEDURE [dbo].[ProductoObtener]
	
	@IdProducto int= NULL
AS BEGIN
  SET NOCOUNT ON

  SELECT 
     E.IdProducto,
     E.Categoria,
     E.NombreProducto,
     E.Cantidad_Disponible,
     E.Caracteristicas,
     E.Estado
     

    FROM dbo.Producto E
    WHERE
		   (@IdProducto IS NULL OR IdProducto=@IdProducto)

END
