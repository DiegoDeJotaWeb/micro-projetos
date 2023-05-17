SELECT *
FROM portfolio
INNER JOIN cliente 
ON portfolio.clienteID=cliente.idCliente

INNER JOIN categoriaPortfolio 

ON categoriaPortfolio.clienteID=categoriaID.idCategoriaPotfolio;
