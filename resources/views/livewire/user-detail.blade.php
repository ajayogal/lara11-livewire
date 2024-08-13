<div>
    <x-slot name="header">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="pt-20 rounded-top"
                    style="background:url({{ $user->image }}) no-repeat; background-size: cover;">
                </div>
                <div class="card rounded-bottom smooth-shadow-sm">
                    <div class="d-flex align-items-center justify-content-between
                pt-4 pb-6 px-4">
                        <!-- avatar -->
                        <div class="d-flex align-items-center">
                            <div class="avatar-xxl avatar-indicators avatar-online me-2
                    position-relative d-flex justify-content-end
                    align-items-end mt-n10">
                                <img src="{{ $user->image }}" class="avatar-xxl rounded-circle border border-2 " alt="{{ $user->name }}">
                                <a href="#!" class="position-absolute top-0 right-0 me-2">
                                    <img src="https://dashui.codescandy.com/dashuipro/assets/images/svg/checked-mark.svg"
                                        alt="Image" class="icon-sm">
                                </a>
                            </div>
                            <!-- content -->
                            <div class="lh-1">
                                <h2 class="mb-0">{{ $user->name }}
                                    <a href="#!" class="text-decoration-none">
                                    </a>
                                </h2>
                                <p class="mb-0 d-block">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div>
                            {{-- create todo --}}
                            <button type="button" class="btn btn-outline-primary d-none d-md-block" data-bs-toggle="modal" data-bs-target="#createTodo" >Create Task</button>

                            <div class="modal fade" id="createTodo"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createTodoLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        @livewire('todo.create-todo', ['user_id' => $user->id ])
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- nav -->
                    <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Activity</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="row">
            <div class="mb-8">
                <div class="card bg-gray-300 shadow-none mb-4">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">Todos ({{ count($user->incompletedTodos) }})</h5>
                            </div>

                        </div>
                    </div>
                </div>
                    <!-- card -->
                @if(sizeof($user->incompletedTodos) > 0)
                    <div class="card">
                        <!-- list group -->
                        <ul class="list-group list-group-flush">
                            @foreach ($user->incompletedTodos as $todo)
                            <li class="list-group-item p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- content  -->
                                        <div class="ms-3 lh-1">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $todo->id }}" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox{{ $todo->id }}">
                                                    <h5 class="mb-1">{{ $todo->title }}</h5>
                                                </label>
                                                <p class="mb-0 ">{{ $todo->description }}</p>
                                            </div>


                                        </div>
                                    </div>
                                    <div>
                                        <x-trash :click="'delete'" :param="$todo->id" :confirm="'Are you sure you want to delete this post?'"/>
                                    </div>
                                </div>
                            </li>
                            <!-- list group item -->
                            @endforeach
                            <li class="list-group-item p-3 d-none">
                                <div class="py-2 text-center">
                                    <!-- btn link  -->
                                    <a href="#!" class="btn btn-primary">View more items
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                @else
                @endif
            </div><!-- end-mb-8 -->
        </div><!-- end-row -->
    </div><!-- end-py-6 -->
</div>
