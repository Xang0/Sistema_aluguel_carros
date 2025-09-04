# Sistema para Aluguel de Automóveis

## Contempla:
 
- Frontend: Interface para usuários alugam carros ou motos.
- Backend: API que processa a requisição e publica uma mensagem em um tópico.
- Banco de Dados: Armazena as informações dos alugueis (PostgreSQL).
- Mensageria (RabbitMQ com AMQP ou Kafka):
  - Um serviço consome a mensagem para atualizar a disponibilidade no banco de dados.
  - Outro serviço envia confirmações por e-mail via fila dedicada
