## Dependency Inversion Principle

Um classe nunca deve depender diretamente de outra classe além de uma abstração dessa classe.

### Exemplo

No exemplo, a classe _UserDB_ depende diretamente do MySQL. Isso significa que se nós trocarmos o motor de banco de dados precisaremos reescrever essa classe e violar o principio do _Open-Close_.

A solução é fazer a abstração da conexão com o banco de dados.
