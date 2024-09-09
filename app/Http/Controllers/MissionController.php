<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\UserPoints;

class MissionController extends Controller
{
    public function show($id){

        $mission = Mission::FindOrFail($id);


        return view('mission', compact('mission'));
    }

    public function processMission($id)
    {
        // 1. Encontrar o usuário que completou a missão.
        $user = auth()->user(); // Obtém o usuário autenticado.
    
        // 2. Determinar a quantidade de pontos a ser atribuída.
        // Aqui você pode definir a lógica para calcular os pontos.
        // Exemplo: Vamos supor que cada missão vale 1.000 pontos.
        $points =  Mission::FindOrFail($id)->points; // Substitua com a lógica real para determinar os pontos.
    
        // 3. Atualizar ou criar o registro de pontos para o usuário.
        $userPoints = UserPoints::firstOrCreate(
            ['user_id' => $user->id], // Condição para encontrar o registro existente.
            ['points' => 0] // Valores padrão ao criar um novo registro.
        );
    
        // 4. Adicionar os pontos ao saldo existente.
        $userPoints->increment('points', $points);
    
        // 5. (Opcional) Retornar uma resposta ou realizar outra ação, como enviar uma mensagem.
        return redirect()->route('dashboard')->with('CompleteMission', $points);
    }

    public function processSaque(Request $request){

        $userPoints = UserPoints::where('user_id', auth()->user()->id)->first();
    
        // Verificar se o usuário tem pontos suficientes
        if($userPoints->points >= $request->value){
            // Deduzir os pontos do usuário
            $userPoints->points -= $request->value;
            $userPoints->save();
        } else {
            return redirect()->route('loja')->with('insuFunds', 'Saldo Insuficiente');
        }
    
        return redirect()->route('loja')->with('complete', 'Saque Realizado com sucesso');
    }
    
    
}
