 <div class="jumbotron">
        <h1>Shorten URL</h1>
        <form class="form-horizontal" action="/create" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="url" class="col-sm-4 control-label">URL to Shorten: </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="url" id="url" placeholder="https://google.com">
            </div>
          </div>
          <div class="form-group">
            <label for="desired_id" class="col-sm-4 control-label">Desired ID:</label>
            <div class="col-sm-8">
              <div class="input-group">
                <div class="input-group-addon">third.dev/</div>
                  <input type="text" class="form-control" name="desired_id" id="desired_id" placeholder="123">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              <div class="g-recaptcha" data-sitekey="6LdQZDsUAAAAADry7S1Xzxp-c5XrSVb3jO1u39ol"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Shorten URL!</button>
            </div>
          </div>
        </form>
      </div>
