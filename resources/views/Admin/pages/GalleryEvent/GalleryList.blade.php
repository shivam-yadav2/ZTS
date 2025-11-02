@extends('admin.layout.layout')

@section('css')
<style>
    .modal-overlay {
        background: rgba(15, 23, 42, 0.75);
        backdrop-filter: blur(2px);
    }

    .modal-enter {
        opacity: 0;
        transform: translateY(16px) scale(0.98);
    }

    .modal-enter-active {
        opacity: 1;
        transform: translateY(0) scale(1);
        transition: all 0.25s ease-out;
    }

    .modal-leave {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .modal-leave-active {
        opacity: 0;
        transform: translateY(12px) scale(0.98);
        transition: all 0.2s ease-in;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        padding: 0.55rem 1.15rem;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: .02em;
        color: #fff;
        border-radius: 0.65rem;
        text-decoration: none;
        box-shadow: 0 8px 18px rgba(15, 23, 42, 0.15);
        transition: transform .18s ease, box-shadow .18s ease, filter .18s ease;
        border: none;
        background: linear-gradient(135deg, #4f46e5 0%, #312e81 100%);
    }

    .btn-action:hover {
        transform: translateY(-1px);
        box-shadow: 0 12px 22px rgba(15, 23, 42, 0.22);
        filter: brightness(1.06);
    }

    .btn-action:active {
        transform: translateY(0);
        box-shadow: 0 6px 14px rgba(15, 23, 42, 0.18);
    }

    .btn-action--primary {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    }

    .btn-action--success {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
    }

    .btn-action--indigo {
        background: linear-gradient(135deg, #4338ca 0%, #312e81 100%);
    }

    .btn-action--danger {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    }

    .btn-action--ghost {
        color: #312e81;
        background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
        box-shadow: none;
    }

    .btn-action--ghost:hover {
        color: #1d4ed8;
        filter: brightness(1.05);
    }
</style>
@endsection

@section('content')
<div class="px-4 py-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-semibold text-slate-800">Gallery Events</h1>
            <p class="text-slate-500">Manage events, view all uploaded images per event, and keep the gallery organized.</p>
        </div>

        <a href="{{ route('events.create') }}"
           class="btn-action btn-action--indigo">
            <i class="fa-solid fa-plus"></i>
            Add Event
        </a>
    </div>

    @if($info->count())
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($info as $event)
                <div class="group flex flex-col bg-white dark:bg-slate-900/80 border border-slate-200 dark:border-slate-700 rounded-2xl shadow-md hover:shadow-xl transition-all overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/uploads/events/'.$event->event_img) }}"
                             alt="{{ $event->event_name }}"
                             class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">

                        <span class="absolute top-3 left-3 inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-semibold bg-white/90 text-slate-700 shadow-sm">
                            <i class="fa-solid fa-calendar"></i>
                            {{ $event->event_date ? date('M d, Y', strtotime($event->event_date)) : 'Not set' }}
                        </span>

                        <span class="absolute top-3 right-3 inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-semibold {{ $event->images->count() ? 'bg-emerald-600 text-white' : 'bg-amber-500 text-white' }} shadow-sm">
                            <i class="fa-solid fa-images"></i>
                            {{ $event->images->count() }}
                        </span>
                    </div>

                    <div class="flex-1 flex flex-col gap-4 px-6 py-5">
                        <div class="space-y-2">
                            <h2 class="text-xl font-semibold text-slate-800 dark:text-slate-100">
                                {{ $event->event_name }}
                            </h2>
                            <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                {{ Str::limit($event->event_description, 200) ?: '—' }}
                            </p>
                        </div>

                        <dl class="grid grid-cols-2 gap-4 text-sm text-slate-500 dark:text-slate-300">
                            <div>
                                <dt class="uppercase text-[11px] tracking-wide text-slate-400">Created</dt>
                                <dd class="mt-1 font-medium text-slate-700 dark:text-slate-100">
                                    {{ $event->created_at?->format('M d, Y') }}
                                </dd>
                            </div>
                            <div>
                                <dt class="uppercase text-[11px] tracking-wide text-slate-400">Updated</dt>
                                <dd class="mt-1 font-medium text-slate-700 dark:text-slate-100">
                                    {{ $event->updated_at?->format('M d, Y') }}
                                </dd>
                            </div>
                        </dl>

                        <div class="mt-auto flex flex-wrap gap-3">
                            <a href="{{ route('events.edit', $event->id) }}"
                               class="btn-action btn-action--primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </a>

                            <a href="{{ url('admin/showForm') }}"
                               class="btn-action btn-action--success">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                Add Images
                            </a>

                            <button type="button"
                                    onclick="openModal('{{ $event->id }}')"
                                    class="btn-action btn-action--indigo">
                                <i class="fa-solid fa-images"></i>
                                View Images
                            </button>

                            <form action="{{ route('events.destroy', $event->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete event “{{ $event->event_name }}”? All images will be removed.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn-action btn-action--danger">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="modal-{{ $event->id }}" class="hidden fixed inset-0 z-40 items-center justify-center p-4 modal-overlay">
                        <div class="modal-enter w-full max-w-5xl bg-white dark:bg-slate-900 rounded-2xl shadow-2xl border border-slate-100 dark:border-slate-700 overflow-hidden">
                            <div class="flex items-start justify-between px-6 py-4 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/70">
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-800 dark:text-slate-100">{{ $event->event_name }}</h3>
                                    <p class="text-slate-500 dark:text-slate-300 text-sm">Manage all uploaded images for this event.</p>
                                </div>
                                <button type="button" onclick="closeModal('{{ $event->id }}')" class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-200 text-xl">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <div class="px-6 py-5 max-h-[70vh] overflow-y-auto bg-white dark:bg-slate-900">
                                @if($event->images->count())
                                    <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                                        @foreach($event->images as $img)
                                            <div class="relative group rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden">
                                                <img src="{{ asset('assets/uploads/galleryimg/'.$img->img) }}"
                                                     alt="Event image"
                                                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">

                                                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent p-3 opacity-0 group-hover:opacity-100 transition">
                                                    <div class="flex justify-between items-center text-xs text-white">
                                                        <span>Uploaded {{ $img->created_at?->format('M d, Y') }}</span>

                                                        <form action="{{ url('admin/delete/'.$img->id) }}"
                                                              method="POST"
                                                              onsubmit="return confirm('Remove this image? This action cannot be undone.');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="btn-action btn-action--danger"
                                                                    style="padding:0.35rem 0.8rem;font-size:0.75rem;border-radius:0.55rem;box-shadow:none;">
                                                                <i class="fa-solid fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="flex flex-col items-center justify-center py-12 text-center text-slate-500">
                                        <i class="fa-solid fa-images text-6xl opacity-20 mb-4"></i>
                                        <p class="text-lg font-medium mb-2">No images uploaded for this event yet</p>
                                        <p class="text-sm mb-4">Add photos to make this gallery event come alive.</p>
                                        <a href="{{ url('admin/showForm') }}"
                                           class="btn-action btn-action--indigo">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            Upload Images
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-20 bg-white/70 rounded-2xl border border-slate-200">
            <i class="fa-solid fa-calendar-xmark text-6xl text-slate-300 mb-4"></i>
            <p class="text-lg text-slate-600 font-medium">No events have been added yet.</p>
            <p class="text-sm text-slate-500 mb-6">Create your first gallery event to start collecting memories.</p>

            <a href="{{ route('events.create') }}"
               class="btn-action btn-action--indigo">
                <i class="fa-solid fa-plus"></i>
                Create Event
            </a>
        </div>
    @endif
</div>
@endsection

@section('script')
<script>
    const activeModals = new Set();

    function openModal(id) {
        const modal = document.getElementById(`modal-${id}`);
        if (!modal) return;

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        const dialog = modal.querySelector('div.modal-enter');
        if (dialog) {
            requestAnimationFrame(() => dialog.classList.add('modal-enter-active'));
        }

        activeModals.add(id);
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(id) {
        const modal = document.getElementById(`modal-${id}`);
        if (!modal) return;

        const dialog = modal.querySelector('div.modal-enter');
        if (dialog) {
            dialog.classList.remove('modal-enter-active');
            dialog.classList.add('modal-leave-active');
        }

        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            if (dialog) dialog.classList.remove('modal-leave-active');

            activeModals.delete(id);
            if (activeModals.size === 0) {
                document.body.classList.remove('overflow-hidden');
            }
        }, 180);
    }

    // Close on background click
    document.querySelectorAll('[id^="modal-"]').forEach(modal => {
        modal.addEventListener('click', e => {
            if (e.target === modal) {
                const id = modal.id.replace('modal-', '');
                closeModal(id);
            }
        });
    });

    // Close on ESC
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && activeModals.size) {
            const lastOpened = Array.from(activeModals).pop();
            closeModal(lastOpened);
        }
    });
</script>
@endsection