<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beer>
 */
class BeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Cerveja Pilsen Premium',
                'IPA Artesanal',
                'Stout Escura',
                'Weissbier Trigo',
                'Porter Clássica',
                'Lager Refrescante',
                'Bock Forte',
                'Witbier Belga',
                'Red Ale Rubi',
                'Golden Ale Dourada'
            ]),
            'tagline' => fake()->randomElement([
                'O sabor autêntico da tradição',
                'Refresco intenso para momentos especiais',
                'Amargor equilibrado e aroma marcante',
                'Suavidade e cremosidade incomparáveis',
                'Para os verdadeiros apreciadores de cerveja',
                'Leveza e frescor em cada gole',
                'Corpo robusto com notas complexas',
                'Tradição belga em sua pureza',
                'Cor vibrante e sabor intenso',
                'Dourado perfeito para qualquer ocasião'
            ]),
            'description' => fake()->randomElement([
                'Uma cerveja pilsen premium com corpo leve e amargor equilibrado. Produzida com maltes selecionados e lúpulos nobres, oferece um sabor refrescante e aroma floral delicado.',
                'IPA artesanal com alto teor alcoólico e amargor pronunciado. Combinação perfeita de maltes ingleses e lúpulos americanos, resultando em um perfil aromático complexo.',
                'Stout escura e encorpada com notas de café torrado e chocolate amargo. Fermentada lentamente para desenvolver sabores ricos e uma textura cremosa.',
                'Cerveja de trigo alemã com aroma de banana e cravo. Refrescante e leve, perfeita para dias quentes com seu corpo suave e final seco.',
                'Porter clássica com corpo médio e sabores de chocolate e café. Maltada intensamente para criar uma cerveja robusta e reconfortante.',
                'Lager refrescante com baixo teor alcoólico e final limpo. Ideal para consumo diário, com equilíbrio perfeito entre malte e lúpulo.',
                'Bock forte e maltada com alto teor alcoólico. Sabor rico de malte caramelizado e aroma de pão fresco, perfeita para ocasiões especiais.',
                'Witbier belga com adição de sementes de coentro e casca de laranja. Leve e refrescante, com aroma cítrico e final picante.',
                'Red ale rubi com maltes especiais que conferem cor intensa. Equilíbrio perfeito entre doçura de malte e amargor de lúpulo.',
                'Golden ale dourada com aparência brilhante e sabor limpo. Leve e fácil de beber, com notas frutadas e final refrescante.'
            ]),
            'first_brewed_at' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'abv' => fake()->randomFloat(1, 4.0, 12.0),
            'ibu' => fake()->numberBetween(15, 80),
            'ebc' => fake()->numberBetween(6, 60),
            'ph' => fake()->randomFloat(1, 4.0, 5.2),
            'volume' => fake()->randomElement([330, 355, 500, 600]),
            'ingredients' => fake()->randomElement([
                'Malte pilsen, malte Munich, lúpulo Hallertau, lúpulo Saaz, levedura lager.',
                'Malte pale ale, malte crystal, lúpulo Cascade, lúpulo Centennial, levedura ale americana.',
                'Malte pale, malte chocolate, malte roasted barley, lúpulo East Kent Goldings, levedura stout.',
                'Malte de trigo, malte pilsen, coentro, casca de laranja, levedura witbier.',
                'Malte pale, malte chocolate, malte crystal, lúpulo Fuggles, levedura porter.',
                'Malte pilsen, malte Vienna, lúpulo Perle, lúpulo Tettnang, levedura lager.',
                'Malte Munich, malte Vienna, malte caramel, lúpulo Magnum, levedura bock.',
                'Malte de trigo, malte pilsen, sementes de coentro, casca de laranja curacao, levedura wit.',
                'Malte pale, malte crystal, malte Munich, lúpulo Target, levedura red ale.',
                'Malte pilsen, malte Vienna, lúpulo Hallertau, lúpulo Hersbrucker, levedura lager.'
            ]),
            'brewer_tips' => fake()->randomElement([
                'Fermente em temperatura controlada entre 8-12°C para obter melhor carbonatação.',
                'Adicione dry hopping nas últimas 48 horas para intensificar o aroma.',
                'Use malte torrado fresco para obter notas de café mais pronunciadas.',
                'Inclua sementes de coentro moídas no final da fervura para aroma autêntico.',
                'Controle a temperatura de fermentação para evitar sabores indesejados.',
                'Use água com baixo teor mineral para cervejas leves e refrescantes.',
                'Permita maturação de pelo menos 4 semanas para desenvolvimento completo do sabor.',
                'Monitore o pH durante a brassagem para obter extração ideal dos maltes.',
                'Use lúpulos frescos para obter melhor aroma e amargor.',
                'Controle a oxigenação durante o enchimento para preservar a qualidade.'
            ]),
        ];
    }
}
