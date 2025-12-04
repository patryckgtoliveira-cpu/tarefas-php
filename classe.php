<?php

/**
 * Classe Carro
 * Esta classe representa um veículo simples, definindo suas propriedades (estado) 
 * e métodos (comportamento).
 */
class Carro 
{
    // --- 1. PROPRIEDADES (Características/Atributos) ---
    
    // Marca do veículo (ex: "Ford", "Fiat")
    public string $marca;
    
    // Modelo específico do veículo (ex: "Ka", "Palio")
    public string $modelo;
    
    // Velocidade atual em km/h
    public int $velocidadeAtual = 0;
    
    // Indica se o motor está ligado (true) ou desligado (false)
    public bool $motorLigado = false;

    /**
     * Construtor da classe Carro.
     * É o método chamado quando o objeto é criado (new Carro()).
     * * @param string $marca A marca do carro.
     * @param string $modelo O modelo do carro.
     */
    public function __construct(string $marca, string $modelo)
    {
        // Atribui os valores passados aos atributos da instância ($this)
        $this->marca = $marca;
        $this->modelo = $modelo;
        
        echo "Um novo carro foi criado: {$this->marca} {$this->modelo}.\n";
        echo "--------------------------------------------------------\n";
    }

    // --- 2. MÉTODOS (Ações/Comportamentos) ---

    /**
     * Liga o motor do carro.
     */
    public function ligarMotor(): void
    {
        if (!$this->motorLigado) {
            $this->motorLigado = true;
            echo "Motor LIGADO. Pronto para dirigir!\n";
        } else {
            echo "O motor já está ligado.\n";
        }
    }

    /**
     * Desliga o motor do carro.
     * A velocidade é zerada por segurança.
     */
    public function desligarMotor(): void
    {
        if ($this->motorLigado) {
            $this->motorLigado = false;
            $this->velocidadeAtual = 0;
            echo "Motor DESLIGADO. Velocidade zerada.\n";
        } else {
            echo "O motor já está desligado.\n";
        }
    }

    /**
     * Aumenta a velocidade do carro.
     * * @param int $incremento A quantidade a ser adicionada à velocidade atual.
     */
    public function acelerar(int $incremento): void
    {
        if (!$this->motorLigado) {
            echo "Ação negada: Você deve ligar o motor antes de acelerar.\n";
            return;
        }

        $this->velocidadeAtual += $incremento;
        echo "Acelerando... Velocidade atual: {$this->velocidadeAtual} km/h.\n";
    }

    /**
     * Reduz a velocidade do carro.
     * * @param int $decremento A quantidade a ser subtraída da velocidade atual.
     */
    public function frear(int $decremento): void
    {
        $this->velocidadeAtual -= $decremento;
        
        // Garante que a velocidade não seja negativa
        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }
        
        echo "Freando... Velocidade atual: {$this->velocidadeAtual} km/h.\n";
    }

    /**
     * Retorna o status atual do carro.
     */
    public function status(): string
    {
        $estado = $this->motorLigado ? "LIGADO" : "DESLIGADO";
        return "STATUS: {$this->marca} {$this->modelo} | Motor: {$estado} | Velocidade: {$this->velocidadeAtual} km/h.\n";
    }
}

// --- 3. CRIANDO UMA INSTÂNCIA (OBJETO) DA CLASSE ---

// 3.1. Criamos um objeto Carro e o armazenamos na variável $meu_carro.
// O construtor é executado neste momento.
$meu_carro = new Carro("Honda", "Civic");

// 3.2. Chamando os métodos para simular o uso do objeto
echo $meu_carro->status();

$meu_carro->ligarMotor();

$meu_carro->acelerar(50);
$meu_carro->acelerar(30);

$meu_carro->frear(20);

echo "--------------------------------------------------------\n";

// 3.3. Verificando o estado final após as ações
echo $meu_carro->status();

$meu_carro->desligarMotor();

// Tentativa de acelerar com o motor desligado (deve falhar)
$meu_carro->acelerar(10); 

echo "--------------------------------------------------------\n";
echo $meu_carro->status();

?>