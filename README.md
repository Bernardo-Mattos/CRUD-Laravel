# b7web laravel

## algumas anotações importantes


em todas as requisições existem 2 entidades, user e o nosso site. Toda ação do user no site gera uma requisição para o nosso site, assim esperando uma resposta (req, res) podendo ser um erro ou a criação de um novo user. 

Site -> web.php (router) função de um roteador, direcionando as requisições para as suas respectivas funções. 

-> controller (cabeça) - entender os dados mandados pelo router e devolver a res das reqs .

-> model (modelo , orm eloquent) - faz o mapeamento do banco de dados.

-> views (pagina , html) - se for uma rota de api não é necessaria. controller não necessariamente envia dados para a view normalmente recebe.

controller não conversa diretamente com o db, sempre passa pela model. 

controller não recebe diretamente as requisições do browser, sempre passa pelo router. 

