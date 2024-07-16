Oque é PSR ? (PHP Standards) - o PHP ao contrário do javascript por exemplo é livre a forma de criação do código, o javascript é mais amarrado, tem um padrão de como deve ser feito, o PHP por ser mais livre a tendência é que cada programador tenda a ter o costume de criar seus códigos de maneiras diferentes, mas isso não é bom para uma futura manutenção, pois por cada um ter um costume ou entendimento de como deve ser feito a codificação, em uma futura manutenção por outro programador, pode tornar algo que ja é dificil se tornar quase impossivel, por isso foi criado o PSR pela comunidade que mantém e atualiza o PHP, para garantir um padrão de desenvolvimento, facilitando uma futura manutenção no sistema. 


Entendendo PRS-1 (1/2) - 

A) Configurar linguagem utf-8 sem BOM. 

B) Arquivos precisam ter:

1 Declarações e Símbolos (classes, constantes, funções) .

2 ou side-effects, IMPLEMENTAÇÃO/EFEITOS COLATERAIS, ou seja, provocar alguma saída, execução do método/da classe,mudar alguma coisa na tela, mostrar alguma informação, ler alguma coisa, puxar algum arquivo etc. mas NUNCA OS DOIS.

RESUMO: Mas NUNCA OS DOIS, não é uma prática padrão criar métodos, classes, símbolos e no mesmo arquivo ter a execução/saída na tela dessa Declaração e Símbolos. 

- Asseguir um Exemplo de uso CORRETO da separação dos arquivos declaração/saída(Efeito Colateral)

//EXEMPLO DE DECLARAÇÃO E SÍMBOLOS:

Asseguir arquivo/pasta: matematica.php

class Matematica{
   public function somar($x, $y){
    return $x + $y;
  }
}

//EXEMPLO DE MOSTRAR ALGO NA TELA: 
(implementação/EFEITO COLATERAL do uso da declaração e símbolos): 

Asseguir Arquivo/pasta: index.php

require 'matematica.php';

echo "RESULTADO: ";

$n = new Matematica();
echo $n->somar(10,20);


Entendendo PSR-1 (2/2) - 
 
E) Os nomes das classes DEVEM ser declarados em StudlyCaps.

 Ou seja, como no exemplo "StudlyCaps", a Primeira letra das palavras do nome da classe devem estar em maiúsculas: assim class MinhaClasse{}, e não assim: class minhaclasse{}.

  
F) As constantes de classe DEVEM ser declaradas em letras maiúsculas e com separadores de sublinhado.


G) Os nomes dos métodos DEVEM ser declarados em camelCase.

  A primeira palavra tem letra minúscula, e a segunda em letra maiúscula (camelCase) :
  
     ->  public function listarTudo(){}

class MatematicaBasica{
  const VERSION = '1.0';  //toda constante se torna automaticamente estática

  public function listarTudo(){   //<--

  }
}


















