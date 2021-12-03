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
                <h6 class="elementor-heading-title elementor-size-default">Unsere Geschichte</h6></div>
            <h3> die Faszination von Haushaltsartikel </h3>

        <div id="text">
            <h6>Willkommen in unserem Unternehmen</h6>
            <p>
            HappyShop wurde 2021 von Fanny in dem Waldstädtchen Älmhult in Schweden als kleines Versandkatalogunternehmen ins Leben gerufen.
            Was klein begann, entwickelte sich nach und nach zu einer weltweiten Möbelmarke, die Menschen in aller Welt mit erschwinglichem
            Design und Komfort versorgt.
             Was aber immer bleibt, ist unsere Vision: Den vielen Menschen einen besseren Alltag zu Hause zu ermöglichen.
              Entdecke hier die Geschichte von HappyShop, finde mehr zu
             unseren Traditionen heraus, was uns heute antreibt und wie wir versuchen, Menschen und unseren Planeten positiv zu verändern.</p></div>
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

<form method="POST" action="{{ url('uebersicht') }}" style="text-align: left; padding: 10vh 0; margin-left:20vh">
    @csrf
<div class="row">
<div class="col-md-7" >
    <div class="card">
    <div class="card-body">

        <h1 class="card-header bg-primary">{{ __('Kontaktanfrage') }}</h1>
        <p> Ich bin ein Textabschnitt. Klicken Sie hier, um Ihren eigenen Text hinzuzufügen. Klicken Sie einfach auf „Text bearbeiten“ oder
            doppelklicken Sie, um Ihren Inhalt hinzuzufügen und die Fonts zu ändern. Hier können Sie Ihren Besuchern mehr erzählen.</p>

        <div class="card-body bg-dark">

                <div class="form-group row">
                    <label for="vorname" class="col-md-4 col-form-label text-md-right">{{ __('Vorname') }}</label>

                    <div class="col-md-6">
                        <input id="vorname" type="text" placeholder="Gibt Vorname" class="form-control vorname @error('vorname') is-invalid @enderror" name="vorname" value="{{ old('vorname') }}" required autocomplete="vorname" autofocus>

                        @error('vorname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="Gibt name"  class="form-control name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" placeholder="Gibt Email" class="form-control email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="straße" class="col-md-4 col-form-label text-md-right">{{ __('Straße') }}</label>

                    <div class="col-md-6">
                        <input id="straße" type="text" placeholder="Gibt Strasse"  class="form-control straße @error('straße') is-invalid @enderror" name="straße" value="{{ old('straße') }}" required autocomplete="straße">

                        @error('straße')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="plz" class="col-md-4 col-form-label text-md-right">{{ __('PLZ') }}</label>

                    <div class="col-md-6">
                        <input id="plz" type="integer" placeholder="Gibt Postlerzahl"  class="form-control plz @error('plz') is-invalid @enderror" name="plz" value="{{ old('plz') }}" required autocomplete="plz" autofocus>

                        @error('plz')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stadt" class="col-md-4 col-form-label text-md-right">{{ __('Stadt') }}</label>

                    <div class="col-md-6">
                        <input id="stadt" type="text" placeholder="Gibt Stadt"  class="form-control stadt @error('stadt') is-invalid @enderror" name="stadt" value="{{ old('stadt') }}" required autocomplete="stadt" autofocus>

                        @error('stadt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="land" class="col-md-4 col-form-label text-md-right">{{ __('Land') }}</label>

                    <div class="col-md-6">
                        <input id="land" type="text" placeholder="Gibt Land"  class="form-control land @error('land') is-invalid @enderror" name="land" value="{{ old('land') }}" required autocomplete="land" autofocus>

                        @error('land')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telephon_nummer" class="col-md-4 col-form-label text-md-right">{{ __('Telephon') }}</label>

                    <div class="col-md-6">
                        <input id="telephon_nummer" type="integer" placeholder="Gibt Telephonnummer"  class="form-control telephon_nummer @error('telephon_nummer') is-invalid @enderror" name="telephon_nummer" value="{{ old('telephon_nummer') }}" required autocomplete="telephon_nummer">

                        @error('telephon_nummer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</form>
<link rel="stylesheet" href="{{ asset('css/ArtikelIndex.css')}}" type="text/css">
<div>
                @include('frontend.astrafooter')
            </div>


        </div>





            </body>
            </html>
