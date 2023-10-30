<?php
namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        try{
        // Validar los datos del formulario si es necesario

        // Crear una nueva instancia de la orden
        $order = new Order();
        $order->id = $request->input('id');
        $order->nombre = $request->input('nombre');
        $order->email = $request->input('email');
        $order->telefono = $request->input('telefono');
        $order->direccion = $request->input('direccion');
        
        // Obtener los productos del carrito desde $request
        $productos = $request->input('productos');
        
        // Convertir el array de productos a una cadena JSON
        $productosJson = json_encode($productos);
        
        // Asignar la cadena JSON a la propiedad "productos"
        $order->productos = $productosJson;


        
        $order->estado = 'pendiente'; 
        

        $order->save();

        // Puedes retornar una respuesta de éxito o cualquier otra información necesaria
        return response()->json(['message' => 'Orden creada con éxito'], 201);
    } catch (\Exception $e) {
        // Manejo de errores y registro de excepciones
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }
    public function updateEstado(Request $request, $id)
{
    try {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        // Obtén el nuevo estado de la solicitud

        // Verifica que el nuevo estado sea válido (por ejemplo, "pendiente" o "atendido")
        $order->estado = 'atendido'; 
        

        // Cambia el estado al nuevo estado proporcionado en la solicitud
    
        $order->save();

        return response()->json(['message' => 'Estado de pedido actualizado con éxito'], 200);
    } catch (\Exception $e) {
        // Manejo de errores y registro de excepciones
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
public function getOrdersByEstado($estado)
{
    $orders = Order::where('estado', $estado)->get();
    return response()->json(['orders' => $orders]);
}

public function getOrdersByUser($identifier)
{
    $orders = Order::where('email', $identifier)
        ->orWhere('id', $identifier)
        ->get();

    return response()->json(['orders' => $orders]);
}

}
