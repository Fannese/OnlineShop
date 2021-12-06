<!DOCTYPE html>
<html lang="en-US">
<head>
@include('layouts.astrastyle')

			</header>

	<div class="entry-content clear" itemprop="text">


				<div data-elementor-type="wp-page" data-elementor-id="27" class="elementor elementor-27" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-ac1f946 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="ac1f946" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-86d9c00" data-id="86d9c00" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-d876d37 elementor-widget elementor-widget-heading" data-id="d876d37" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Haushalt artikel</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-4851c3d elementor-widget elementor-widget-heading" data-id="4851c3d" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h1 class="elementor-heading-title elementor-size-default">Nehmen Sie mit Uns Kontakt auf!</h1>		</div>
				</div>
				<div class="elementor-element elementor-element-22c0901 elementor-widget elementor-widget-button" data-id="22c0901" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">

		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>

        <section class="elementor-section elementor-top-section elementor-element elementor-element-156179a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="156179a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8cef99a" data-id="8cef99a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e5ddc22 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="e5ddc22" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
            </div>
        </div>

</section>
<section>
    <div class="container">

            <div class="elementor-widget-container">
                <h6 class="elementor-heading-title elementor-size-default">Kontakt</h6></div>
            <h3>Kontaktieren Sie uns. Wir freuen uns auf Ihre Nachricht. </h3>

        <div id="text">

            <p> Haben Sie Fragen zu Ihrer Bestellung oder zum Shop? Kontaktieren Sie bitte </p></div>
    </div>

</section>
<div class="container-fluid" style="background-image: url('{{ asset('assets/images/contact.jpg') }}'); no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-repeat:no-repeat;
height:110vh;
widght:200px
background-size:contain">

<form method="POST" action="{{ route('kontakt') }}" enctype="multipart/form-data" style="text-align: left; padding: 10vh 0; margin-left:20vh">
    @csrf

<div class="row">
<div class="col-md-7" >
    <div class="card">
    <div class="card-body">

        <h1 class="card-header bg-primary">{{ __('Kontaktanfrage') }}</h1>


        <div class="card-body bg-dark">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="Gibt name"  class="form-control name @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
<br>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="Gibt Email" class="form-control email @error('email') is-invalid @enderror" name="email"  required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group row">

                    <label for="nachricht" class="col-md-4 col-form-label text-md-right">{{ __('Nachricht') }}</label>
                    <div class="col-md-6">
                    <textarea type="text" class="form-control @error('nachricht') is-invalid @enderror" name="nachricht" autofocus placeholder="Hinterlasse hier einen Kommentar" id="nachricht" style="height: 200px ; width:200px"></textarea>


                        @error('nachricht')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    <br>

                  <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Absenden') }}
                            </button>
                        </div>


                </div>
        </div>
    </div>
</div>
</div>
</div>

</form>
</div>
<link rel="stylesheet" href="{{ asset('css/ArtikelIndex.css')}}" type="text/css">
<div>
                @include('frontend.astrafooter')
            </div>


        </div>





            </body>
            </html>
