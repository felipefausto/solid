## Single-responsibility Principle

Objetos ou entidades devem estar abertas a extensões mas fechadas para modificações.

### Exemplo

No exemplo utilizado, tivemos que calcular a area total de alguns objetos e para fazer isso precisamos da classe _Calculator_ que apenas faz a soma da area de cada objeto.

Se adicionarmos outro objeto, como por exemplo um circulo, teriamos que alterar a classe _Calculator_ para poder calcular a área do novo objeto. A solução é criar uma _Interface_ que tem um método que será implementado para todos os objetos. Dessa forma usaremos apenas um método para calcular a soma e se precisarmos adicionar um novo objeto, este irá apenas implementar a nossa _interface_.
