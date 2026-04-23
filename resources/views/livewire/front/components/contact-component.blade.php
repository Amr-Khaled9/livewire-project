                    <form wire:submit.prevent="sendMessage">
                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input wire:model="name" type="text" class="form-control" placeholder="Your Name">
                                    <label>Your Name</label>
                                </div>
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input wire:model="email" type="email" class="form-control"
                                        placeholder="Your Email">
                                    <label>Your Email</label>
                                </div>
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input wire:model="subject" type="text" class="form-control" placeholder="Subject">
                                    <label>Subject</label>
                                </div>
                                @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea wire:model="message" class="form-control"
                                        style="height: 150px"></textarea>
                                    <label>Message</label>
                                </div>
                                @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <!-- Button -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Send Message
                                </button>
                            </div>

                            <!-- Success -->
                            @if (session()->has('success'))
                            <div class="text-dark text-center mt-2">
                                {{ session('success') }}
                            </div>
                            @endif

                        </div>
                    </form>