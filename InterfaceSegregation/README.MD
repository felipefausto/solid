## Interface Segregation Principle

Uma classe nunca deve implementar uma interface que não funcione para ela.

### Exemplo

No nosso exemplo nós temos a interface veículo que implementa dois métodos: _fly_ e _drive_. Nesse caso toda classe que implementar essa interface será obrigado a ter ambos os métodos. O problema é que temos uma classe que não utiliza um dos métodos, a nossa classe _Car_.

A solução aqui seria quebrar a inferface _VehicleInterface_ em duas mais específicas que será utilizadas somente quando necessário.