CREATE TABLE [dbo].[Producto]
(
	[IdProducto] INT NOT NULL IDENTITY(1,1) CONSTRAINT PK_Producto PRIMARY KEY CLUSTERED(IdProducto)
   ,Categoria VARCHAR(50) NOT NULL
   ,NombreProducto VARCHAR(50) NOT NULL
   ,Cantidad_Disponible INT NOT NULL
   ,Caracteristicas VARCHAR(50) NOT NULL
   ,Estado VARCHAR(50) NOT NULL
)
