@extends('marketing.front')
@section('content')

            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard Marketing</span>
                <h3 class="page-title">Form Marketing</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Form Biodata</span>
                        <br>
                        <!-- button trigger Biodata -->
                        <a data-toggle="modal" data-target="#biodata" href="" class="btn btn-primary">Buat</a>
                        <!-- end button trigger biodata -->
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
                        <!-- modal biodata -->
                        <div class="modal fade" id="biodata" tabindex="-1" role="dialog" aria-labelledby="biodataLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="biodataLabel">Data Diri</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                    <!-- form biodata -->
                                    <form action="{{ route('biodata.store') }}" method="post">
                                    @csrf
                                        <label for="">Nama Lengkap</label>
                                            <input class="form-control" type="text" name="nama" id="">
                                        <br>
                                        <label for="">Tempat,</label>
                                            <input class="form-control" type="text" cols="100"  name="tempat" id="">
                                        <label for="">Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggal_lahir" id="">
                                        <br>
                                        <label for="">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="" cols="30" rows="4"></textarea>
                                        <br>
                                        <label for="">Nama Instansi</label>
                                            <input class="form-control" type="text" name="nama_instansi" id="">
                                        <br>
                                        <label for="">Alamat Instansi</label>
                                            <textarea class="form-control" name="alamat_instansi" id="" cols="30" rows="4"></textarea>
                                        <br>
                                        <label for="">Jabatan</label>
                                            <input class="form-control" type="text" name="jabatan" id="">
                                        <br>
                                        <label for="">Email</label>
                                            <input class="form-control" type="email" name="email" id="">
                                        <br>
                                        <label for="">Telepon</label>
                                            <input class="form-control" type="number" name="telepon" id="">
                                        <br>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </form>
                <!-- end form biodata -->
                                </div>
  
                                </div>
                            </div>
                        </div>
                        <!-- end modal biodata -->

              <!-- modal spk -->
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Form SPK</span>
                        
                        <br>
                        <a style="width:100px;" data-toggle="modal" data-target="#spk" class="btn btn-primary" href="">Buat</a>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
                        
                        <div class="modal fade" id="spk" tabindex="-1" role="dialog" aria-labelledby="spkLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="spkLabel">Surat Pemesanan Kontrak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                <!-- form spk -->
                                <form action="{{ route('spk.store') }}" method="POST">
                                    @csrf

                                    <label for="">Tangggal</label>
                                    <input type="date" name="tanggal" class="form-control">
                                    <br>
                                    <label for="">Nama Konsumen</label>
                                    <input type="text" name="nama_konsumen" class="form-control">
                                    <br>
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" cols="30" rows="2"></textarea>
                                    <br>
                                    <label for="">No Surat</label>
                                    <input type="number" name="no_surat" class="form-control">
                                    <br>
                                    <label for="">No Telp</label>
                                    <input type="string" name="no_telp" class="form-control">
                                    <br>
                                    <label for="">Produk</label>
                                    <textarea class="form-control" name="produk" id="" cols="30" rows="4"></textarea>
                                    <br>
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" cols="30" rows="4"></textarea>
                                    <br>
                                    <label for="">Harga</label>
                                    <input type="number" name="harga" class="form-control">
                                    <br>
                                    <label for="">Total</label>
                                    <input type="number" name="total" class="form-control">
                                    <br>
                                    <label for="">Uang Muka</label>
                                    <input type="number" name="uang_muka" class="form-control">
                                    <br>
                                    <label for="">Sisa Tagihan</label>
                                    <input type="number" name="sisa_tagihan" class="form-control">
                                    <br>
                                    <label for="">Pemesanan</label>
                                    <input type="text" name="pemesanan" class="form-control">
                                    <br>
                                    <label for="">Marketing</label>
                                    <input type="text" name="marketing" class="form-control">
                                    <br>
                                    <label for="">Mengetahui</label>
                                    <input type="text" name="mengetahui" class="form-control">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                    <!-- end form spk -->
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- end modal spk -->


              <!-- modal pom -->
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">POM</span>
                        <br>
                        <a style="width:100px;" data-toggle="modal" data-target="#pom" class="btn btn-primary" class="btn btn-primary" href="">Buat</a>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                  </div>
                </div>
              </div>

              <!-- form pom -->
              <div class="modal fade" id="pom" tabindex="-1" role="dialog" aria-labelledby="pomLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pomLabel">Point Of Meeting</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="{{ route('pom.store') }}">
                    @csrf
                      <label for="">Nama Proyek</label>
                        <input type="text" name="nama_proyek" class="form-control">
                      <br>
                      <label for="">Programmer Proyek</label>
                        <input type="text" name="programmer_proyek" class="form-control">
                      <br>
                      <label for="">Perihal</label>
                        <input type="text" name="perihal" class="form-control">
                      <br>
                      <label for="">Peserta Rapat</label>
                        <input type="text" name="peserta_rapat" class="form-control">
                      <br>
                      <label for="">Lokasi Rapat</label>
                        <input type="text" name="lokasi_rapat" class="form-control">
                      <br>
                      <label for="">Dibuat Oleh</label>
                        <input type="text" name="lr_dibuat_oleh" class="form-control">
                      <br>
                      <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                      <br>
                      <label for="">Diskusi</label>
                        <input type="text" name="diskusi" class="form-control">
                      <br>
                      <label for="">Rencana Kegiatan</label>
                        <input type="text" name="rencana_kegiatan" class="form-control">
                      <br>
                      <label for="">Mulai</label>
                        <input type="date" name="mulai" class="form-control">
                      <br>
                      <label for="">Selesai</label>
                        <input type="date" name="selesai" class="form-control">
                      <br>
                      <label for="">Dibuat Oleh</label>
                        <input type="text" name="dibuat_oleh" class="form-control">
                      <br>
                      <label for="">Diketahui Oleh</label>
                        <input type="text" name="diketahui_oleh" class="form-control">
                      <br>
                      <label for="">Disetujui Oleh</label>
                        <input type="text" name="disetujui_oleh" class="form-control">

                      <button type="submit" class="btn btn-primary">Sumbit</button>
                      </form>
                    <!-- end form pom -->
                    </div>
              
                      </div>
                  </div>
              </div>
              <!-- end modal pom -->

            <!-- End Small Stats Blocks -->
            <div class="row">
              <!-- Users Stats -->
              <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">List Konsumen</h6>
                  </div>
                  <div class="card-body pt-0">
                    <div class="row border-bottom py-2 bg-light">
                      <div class="col-12 col-sm-6">
                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                          <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                          <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                          <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                        <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
                      </div>
                    </div>
                    <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
                  </div>
                </div>
              </div>
              <!-- End Users Stats -->
              <!-- Users By Device Stats -->
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small h-100">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Users by device</h6>
                  </div>
                  <div class="card-body d-flex py-0">
                    <canvas height="220" class="blog-users-by-device m-auto"></canvas>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                          <option selected>Last Week</option>
                          <option value="1">Today</option>
                          <option value="2">Last Month</option>
                          <option value="3">Last Year</option>
                        </select>
                      </div>
                      <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Users By Device Stats -->
              <!-- New Draft Component -->
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Quick Post -->
                <div class="card card-small h-100">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">New Draft</h6>
                  </div>
                  <div class="card-body d-flex flex-column">
                    <form class="quick-post-form">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brave New World"> </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Words can be like X-rays if you use them properly..."></textarea>
                      </div>
                      <div class="form-group mb-0">
                        <button type="submit" class="btn btn-accent">Create Draft</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Quick Post -->
              </div>
              <!-- End New Draft Component -->
              <!-- Discussions Component -->
              <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Discussions</h6>
                  </div>
                  <div class="card-body p-0">
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="{{url('frontend/images/avatars/1.jpg')}}" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">James Johnson</a> on
                          <a class="text-secondary" href="#">Hello World!</a>
                          <span class="text-muted">– 3 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="{{url('frontend/images/avatars/2.jpg')}}" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">James Johnson</a> on
                          <a class="text-secondary" href="#">Hello World!</a>
                          <span class="text-muted">– 4 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="{{url('frontend/images/avatars/3.jpg')}}" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">James Johnson</a> on
                          <a class="text-secondary" href="#">Hello World!</a>
                          <span class="text-muted">– 5 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col text-center view-report">
                        <button type="submit" class="btn btn-white">View All Comments</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Discussions Component -->
              <!-- Top Referrals Component -->
              <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Top Referrals</h6>
                  </div>
                  <div class="card-body p-0">
                    <ul class="list-group list-group-small list-group-flush">
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">GitHub</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Hacker News</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Reddit</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">The Next Web</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">YouTube</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Adobe</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select custom-select-sm">
                          <option selected>Last Week</option>
                          <option value="1">Today</option>
                          <option value="2">Last Month</option>
                          <option value="3">Last Year</option>
                        </select>
                      </div>
                      <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Top Referrals Component -->
            </div>
@endsection