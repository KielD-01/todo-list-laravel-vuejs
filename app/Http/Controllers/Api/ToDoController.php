<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{

    /**
     * Fetch a list of the items
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $items = Todo::query()->orderByDesc('id')->get()->toArray();
        return $this->json(['items' => $items]);
    }

    /**
     * Stores a ToDo item
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $toDo = Todo::create($request->post());

        if ($toDo instanceof Todo) {
            return $this->json(compact('toDo'), 'Created', 201);
        }

        return $this->json(null, 'Failed to Create', 422);
    }

    /**
     * Updates a ToDo item
     *
     * @param Request $request
     * @param Todo $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Todo $todo)
    {
        if ($todo->update($request->post())) {
            return $this->json([], 'Updated', 204);
        }

        return $this->json(null, 'Failed to Create', 422);
    }

    /**
     * Deletes a ToDo item
     *
     * @param Todo $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Todo $todo)
    {
        try {
            if ($todo->delete()) {
                return $this->json(null, 'Deleted');
            }

            return $this->json(null, 'Failed to Delete', 400);
        } catch (\Exception $e) {
            return $this->json(null, $e->getMessage(), 422);
        }
    }
}
