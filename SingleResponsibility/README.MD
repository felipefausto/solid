## Single-responsibility Principle

Uma classe deve ter apenas um trabalho.

### Exemplo

No exemplo utilizado nesse principio temos como forma errada de escrever uma classe chamada _User_ que tem dentro de si um método para também salvar/criar um registro no banco.

Seguindo principio _Single-responsability_ podemos abstrair esse método para outra classe a qual a responsabilidade única seria de conectar a _User_ ao banco de dados. Dessa forma, temos duas classes distintas com trabalhos diferentes, _User_ responsável por lidar apenas com questões do _user_ e a _UserBD_ responsável apenas com questões relacionadas ao _User_ com o Banco de Dados (salvar, consultar, editar ...).
