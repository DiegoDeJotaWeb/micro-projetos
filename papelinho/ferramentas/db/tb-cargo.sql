INSERT INTO tb_cargo  (nomeCargo)values("Barbeiro");

select *from tb_cargo;

SELECT *
FROM tb_cargo WHERE idCargo =3;

UPDATE tb_cargo
SET nomeCargo = 'diego'
WHERE idCargo = 3;