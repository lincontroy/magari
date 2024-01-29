@extends('layouts.main')
@section('content')

<section class="section-padding bg-light-white listing-details">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="listing-details-inner  bg-custom-white padding-20">
          <div class="row">
            <div class="col-lg-8">
              <div class="detail-slider-for mb-xl-20 magnific-gallery">
                <div class="slide-item"> <a href="" class="popup"> <img src="https://lesusexecutive.co.ke/wed/3.png" class="image-fit" alt="img"> </a> </div>
              </div>
              <hr>
              <div class="listing-meta-sec mb-md-80">
                <div class="tabs">
                  <ul class="custom-flex nav nav-tabs mb-xl-20">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#amenities">Amenities</a> </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="overview">
                      <div class="tab-inner">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="hotel-type mb-xl-20 bg-light-white padding-10">
                              <ul class="custom">
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Rental Company:</label>
                                  EZ Rent a Car</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Car Type</label>
                                  Economy</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Car Name</label>
                                  Toyota Auris</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Passenger</label>
                                  4</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Baggage</label>
                                  2</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Car Features</label>
                                  Available</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Taxs & Fees</label>
                                  $155.60</li>
                                <li class="text-light-dark">
                                  <label class="no-margin text-custom-blue">Total Price</label>
                                  $201</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="listing-testimonial padding-20 bg-light-white mb-xl-20">
                              <div class="testimonial-inner detail-testimonial">
                                <div class="tesimonial-item"> <cite class="text-custom-blue fs-16">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories.</cite>
                                  <div class="testimonial-author">
                                    <div class="author-img"> <img src="assets/images/blog/comment_1.jpg" class="rounded-circle" alt="img"> </div>
                                    <div class="author-name ml-2">
                                      <h6 class="text-custom-black no-margin fs-14 fw-500">Jhon</h6>
                                      <p class="no-margin text-light-dark">Passenger</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="tesimonial-item"> <cite class="text-custom-blue fs-16">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories.</cite>
                                  <div class="testimonial-author">
                                    <div class="author-img"> <img src="assets/images/blog/comment_2.jpg" class="rounded-circle" alt="img"> </div>
                                    <div class="author-name ml-2">
                                      <h6 class="text-custom-black no-margin fs-14 fw-500">Jhon</h6>
                                      <p class="no-margin text-light-dark">Passenger</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="information">
                              <h4 class="text-custom-black">Car Rental Information</h4>
                              <p class="text-light-dark">Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>
                              <p class="text-light-dark no-margin">Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="amenities">
                      <h4 class="text-custom-black">Amenities</h4>
                      <p class="text-light-dark">Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum.</p>
                      <ul class="custom amenities row no-gutters mb-xl-20">
                        <li class="col-sm-6">
                          <div class="icon-box text-light-dark"> <i class="fab fa-youtube"></i> 4 Passengers </div>
                        </li>
                        <li class="col-sm-6">
                          <div class="icon-box text-light-dark"> <i class="fab fa-youtube"></i> 2 Bags </div>
                        </li>
                        <li class="col-sm-6">
                          <div class="icon-box text-light-dark"> <i class="fab fa-youtube"></i> Air Conditioning </div>
                        </li>
                        <li class="col-sm-6">
                          <div class="icon-box text-light-dark"> <i class="fab fa-youtube"></i> Satellite Navigation </div>
                        </li>
                        <li class="col-sm-6">
                          <div class="icon-box text-light-dark"> <i class="fab fa-youtube"></i> Disel Vehicle </div>
                        </li>
                        <li class="col-sm-6">
                          <div class="icon-box text-light-dark"> <i class="fab fa-youtube"></i> Automatic Transmission </div>
                        </li>
                      </ul>
                      <h4 class="text-custom-black">Travel Info</h4>
                      <p class="text-light-dark">Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum.</p>
                      <div class="travel-info bg-light-white">
                        <div class="row no-gutters">
                          <div class="col-sm-6">
                            <div class="head padding-20">
                              <h5 class="text-custom-black fs-14 fw-500 no-margin">Pick-up location details</h5>
                              <span class="text-light-dark fs-12">Phone: (+247) 123 456 7890</span> </div>
                            <div class="travel-info-body padding-20">
                              <div class="date-wrapper mb-xl-20">
                                <div class="icon text-custom-blue fs-20"> <i class="far fa-clock"></i> </div>
                                <div class="text">
                                  <p class="text-custom-black no-margin">Pickup Time</p>
                                  <span class="text-light-dark fs-12">THU, NOV 14, 2019 | 11:00 AM</span> </div>
                              </div>
                              <div class="date-wrapper">
                                <div class="icon text-custom-blue fs-20"> <i class="fas fa-map-marker-alt"></i> </div>
                                <div class="text">
                                  <p class="text-custom-black no-margin">Location</p>
                                  <span class="text-light-dark fs-12">London City, Airport</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="head padding-20">
                              <h5 class="text-custom-black fs-14 fw-500 no-margin">Drop-off location details</h5>
                              <span class="text-light-dark fs-12">Phone: (+247) 123 456 7890</span> </div>
                            <div class="travel-info-body padding-20">
                              <div class="date-wrapper mb-xl-20">
                                <div class="icon text-custom-blue fs-20"> <i class="far fa-clock"></i> </div>
                                <div class="text">
                                  <p class="text-custom-black no-margin">Drop Off Time</p>
                                  <span class="text-light-dark fs-12">FRI, NOV 15, 2019 | 11:00 AM</span> </div>
                              </div>
                              <div class="date-wrapper">
                                <div class="icon text-custom-blue fs-20"> <i class="fas fa-map-marker-alt"></i> </div>
                                <div class="text">
                                  <p class="text-custom-black no-margin">Location</p>
                                  <span class="text-light-dark fs-12">Paris Orly, Airport</span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="blog-details bg-custom-white">
                    <hr>
                    <!-- tags & social -->
                    <div class="post-details-tags-social mb-xl-20">
                      <div class="row no-margin">
                        <div class="col-md-6">
                          <div class="tags-box"> <span class="fs-18 text-light-dark"><i class="fas fa-tags"></i></span>
                            <div class="tags"> <a href="#">Travel</a> <a href="#">Tour</a> <a href="#">Agent</a> </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="social-media-box">
                            <ul class="custom-flex">
                              <li> <a href="#" class="fb"> <i class="fab fa-facebook-f"></i> </a> <span class="social-number bg-light-white">500</span> </li>
                              <li> <a href="#" class="tw"> <i class="fab fa-twitter"></i> </a> <span class="social-number bg-light-white">20</span> </li>
                              <li> <a href="#" class="fb"> <i class="fab fa-youtube"></i> </a> <span class="social-number bg-light-white">46</span> </li>
                              <li> <a href="#" class="bg-custom-blue"> <i class="fas fa-share-alt"></i> </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- tags & social -->
                    <!-- post author -->
                    <div class="post-author bg-light-white padding-15 mb-xl-20">
                      <div class="author-img animate-img mb-sm-20"> <a href="#"> <img src="assets/images/blog/author-img.png" class="image-fit" alt="author-img"> </a> </div>
                      <div class="author-caption">
                        <h5 class="fw-600"><a href="#" class="text-custom-black">Anna Wright</a> <span class="text-custom-blue fs-16 ml-2"><i class="fab fa-twitter"></i></span></h5>
                        <a href="#" class="authorpost text-custom-blue fw-600">Most article by this author</a>
                        <p class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                    <!-- post author -->
                    <!-- post pagination -->
                    <div class="pagination-btn">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                    </div>
                    <!-- post pagination -->
                    <!-- comments -->
                    <div class="comment-box section-padding-top p-relative">
                      <div id="comment-box">
                        <h4 class="text-custom-black fw-600">Reviews [4]</h4>
                        <ul class="comments custom">
                          <li class="comment">
                            <article>
                              <div class="comment-avatar"> <img src="assets/images/blog/comment_1.jpg" class="rounded-circle" alt="comment"> </div>
                              <div class="comment-content">
                                <div class="comment-meta">
                                  <div class="comment-meta-header">
                                    <h5 class="text-custom-black fw-600 author mb-3">Rosalina Pong</h5>
                                    <div class="post-date"> <a href="blog-details.html" class="date bg-custom-blue text-custom-white">25 Dec 2019</a> </div>
                                  </div>
                                  <div class="comment-meta-reply"> <a href="#" class="comment-reply-link btn-first btn-submit"><i class="fas fa-reply"></i></a> </div>
                                </div>
                                <div class="comment">
                                  <p class="text-light-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                              </div>
                            </article>
                          </li>
                          <li class="comment">
                            <article>
                              <div class="comment-avatar"> <img src="assets/images/blog/comment_2.jpg" class="rounded-circle" alt="comment"> </div>
                              <div class="comment-content">
                                <div class="comment-meta">
                                  <div class="comment-meta-header">
                                    <h5 class="text-custom-black fw-600 author mb-3">Brian Wright</h5>
                                    <div class="post-date"> <a href="blog-details.html" class="date bg-custom-blue text-custom-white">30 Nov 2019</a> </div>
                                  </div>
                                  <div class="comment-meta-reply"> <a href="#" class="comment-reply-link btn-first btn-submit"><i class="fas fa-reply"></i></a> </div>
                                </div>
                                <div class="comment">
                                  <p class="text-light-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                              </div>
                            </article>
                            <ul class="children">
                              <li class="comment">
                                <article>
                                  <div class="comment-avatar"> <img src="assets/images/blog/comment_3.jpg" class="rounded-circle" alt="comment"> </div>
                                  <div class="comment-content">
                                    <div class="comment-meta">
                                      <div class="comment-meta-header">
                                        <h5 class="text-custom-black fw-600 author mb-3">Sarah Wright</h5>
                                        <div class="post-date"> <a href="blog-details.html" class="date bg-custom-blue text-custom-white">30 Nov 2019</a> </div>
                                      </div>
                                      <div class="comment-meta-reply"> <a href="#" class="comment-reply-link btn-first btn-submit"><i class="fas fa-reply"></i></a> </div>
                                    </div>
                                    <div class="comment">
                                      <p class="text-light-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                  </div>
                                </article>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="comment-respond" id="respond">
                          <h4 class="text-custom-black fw-600">Leave Comment</h4>
                          <form>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-custom-black fw-500 fs-14">Full Name</label>
                                  <input type="text" name="#" class="form-control form-control-custom" placeholder="Full Name">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="text-custom-black fw-500 fs-14">Email I'd</label>
                                  <input type="email" name="#" class="form-control form-control-custom" placeholder="Email I'd">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <label class="text-custom-black fw-500 fs-14">Comment</label>
                                  <textarea rows="4" name="#" class="form-control form-control-custom" placeholder="Comment"></textarea>
                                </div>
                                <button type="submit" class="btn-first btn-submit">Leave Comment</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- comments -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-12">
                  <div class="quick-quote bx-wrapper padding-20 mb-xl-30">
                    <h5 class="text-custom-black">Enquiry Now</h5>
                    <form>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label class="fs-14 text-custom-black fw-500">Pick Up</label>
                            <input type="text" name="#" class="form-control form-control-custom" placeholder="city, distirct or specific airpot">
                          </div>
                          <div class="form-group">
                            <label class="fs-14 text-custom-black fw-500">Pick Up Date/Time</label>
                            <div class="input-group group-form">
                              <input type="text" name="#" class="form-control form-control-custom datepickr" placeholder="mm/dd/yy" readonly="">
                              <span class="input-group-append"> <i class="far fa-calendar"></i> </span> </div>
                          </div>
                          <div class="form-group">
                            <label class="fs-14 text-custom-black fw-500">Drop Off</label>
                            <input type="text" name="#" class="form-control form-control-custom" placeholder="city, distirct or specific airpot">
                          </div>
                          <div class="form-group">
                            <label class="fs-14 text-custom-black fw-500">Drop Off Date/Time</label>
                            <div class="input-group group-form">
                              <input type="text" name="#" class="form-control form-control-custom datepickr" placeholder="mm/dd/yy" readonly="">
                              <span class="input-group-append"> <i class="far fa-calendar"></i> </span> </div>
                          </div>
                          <div class="form-group">
                            <label class="fs-14 text-custom-black fw-500">Car Type</label>
                            <div class="group-form">
                              <select class="custom-select form-control form-control-custom">
                                <option>Economy</option>
                                <option>Compact</option>
                              </select>
                            </div>
                          </div>
                          <button type="submit" class="btn-first btn-submit full-width btn-height">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="car-grid mb-xl-30">
                    <div class="car-grid-wrapper bx-wrapper">
                      <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/cars/1.png" class="full-width" alt="img"> </a> </div>
                      <div class="car-grid-caption padding-20 bg-custom-white p-relative">
                        <h4 class="title fs-16"><a href="#" class="text-custom-black">Economy<small class="text-light-dark">Per Day</small></a></h4>
                        <span class="price"><small>From</small>$58</span>
                        <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                        <div class="action"> <a class="btn-second btn-small" href="#">View</a> <a class="btn-first btn-submit" href="#">Book</a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="need-help bx-wrapper padding-20">
                    <h5 class="text-custom-black">Need Help?.</h5>
                    <p class="text-light-dark">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                    <ul class="custom">
                      <li class="text-custom-blue fs-18"> <i class="fas fa-phone-alt"></i> <a href="#" class="text-light-dark">(+347) 123 456 7890</a> </li>
                      <li class="text-custom-blue fs-18"> <i class="fas fa-envelope"></i> <a href="#" class="text-light-dark fs-14">help@domain.com</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection