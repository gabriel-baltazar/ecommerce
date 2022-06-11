<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Produto;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class GraficoProduto extends BaseChart
{

    public ?array $middlewares = ['auth'];
    
    public ?string $name = 'grafico_produto';

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $produto = new Produto();
        $getNameProducts = $produto->select('nome')->pluck('nome')->toArray();
        $getNamePrices = $produto->select('preco')->pluck('preco')->toArray();
        
        return Chartisan::build()
            ->labels($getNameProducts)
            ->dataset('Produtos', $getNamePrices);
    }
}