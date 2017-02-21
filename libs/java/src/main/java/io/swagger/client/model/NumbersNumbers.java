/**
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authenticate button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


package io.swagger.client.model;

import java.util.Objects;
import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import io.swagger.client.model.NumbersLabel;


/**
 * NumbersNumbers
 */
@javax.annotation.Generated(value = "class io.swagger.codegen.languages.JavaClientCodegen", date = "2017-02-21T14:43:18.826-07:00")
public class NumbersNumbers   {
  @SerializedName("id")
  private Integer id = null;

  @SerializedName("number")
  private String number = null;

  @SerializedName("tollfree")
  private Boolean tollfree = null;

  @SerializedName("premium")
  private Boolean premium = null;

  @SerializedName("custom")
  private Boolean custom = null;

  @SerializedName("country")
  private String country = null;

  @SerializedName("countryName")
  private String countryName = null;

  @SerializedName("state")
  private String state = null;

  @SerializedName("city")
  private String city = null;

  @SerializedName("label")
  private NumbersLabel label = null;

  @SerializedName("defaultSettingsInherited")
  private Boolean defaultSettingsInherited = null;

  @SerializedName("default")
  private Boolean _default = null;

  public NumbersNumbers id(Integer id) {
    this.id = id;
    return this;
  }

   /**
   * Get id
   * @return id
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getId() {
    return id;
  }

  public void setId(Integer id) {
    this.id = id;
  }

  public NumbersNumbers number(String number) {
    this.number = number;
    return this;
  }

   /**
   * Get number
   * @return number
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getNumber() {
    return number;
  }

  public void setNumber(String number) {
    this.number = number;
  }

  public NumbersNumbers tollfree(Boolean tollfree) {
    this.tollfree = tollfree;
    return this;
  }

   /**
   * Get tollfree
   * @return tollfree
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getTollfree() {
    return tollfree;
  }

  public void setTollfree(Boolean tollfree) {
    this.tollfree = tollfree;
  }

  public NumbersNumbers premium(Boolean premium) {
    this.premium = premium;
    return this;
  }

   /**
   * Get premium
   * @return premium
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getPremium() {
    return premium;
  }

  public void setPremium(Boolean premium) {
    this.premium = premium;
  }

  public NumbersNumbers custom(Boolean custom) {
    this.custom = custom;
    return this;
  }

   /**
   * Get custom
   * @return custom
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getCustom() {
    return custom;
  }

  public void setCustom(Boolean custom) {
    this.custom = custom;
  }

  public NumbersNumbers country(String country) {
    this.country = country;
    return this;
  }

   /**
   * Get country
   * @return country
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getCountry() {
    return country;
  }

  public void setCountry(String country) {
    this.country = country;
  }

  public NumbersNumbers countryName(String countryName) {
    this.countryName = countryName;
    return this;
  }

   /**
   * Get countryName
   * @return countryName
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getCountryName() {
    return countryName;
  }

  public void setCountryName(String countryName) {
    this.countryName = countryName;
  }

  public NumbersNumbers state(String state) {
    this.state = state;
    return this;
  }

   /**
   * Get state
   * @return state
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getState() {
    return state;
  }

  public void setState(String state) {
    this.state = state;
  }

  public NumbersNumbers city(String city) {
    this.city = city;
    return this;
  }

   /**
   * Get city
   * @return city
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getCity() {
    return city;
  }

  public void setCity(String city) {
    this.city = city;
  }

  public NumbersNumbers label(NumbersLabel label) {
    this.label = label;
    return this;
  }

   /**
   * Get label
   * @return label
  **/
  @ApiModelProperty(example = "null", value = "")
  public NumbersLabel getLabel() {
    return label;
  }

  public void setLabel(NumbersLabel label) {
    this.label = label;
  }

  public NumbersNumbers defaultSettingsInherited(Boolean defaultSettingsInherited) {
    this.defaultSettingsInherited = defaultSettingsInherited;
    return this;
  }

   /**
   * Get defaultSettingsInherited
   * @return defaultSettingsInherited
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getDefaultSettingsInherited() {
    return defaultSettingsInherited;
  }

  public void setDefaultSettingsInherited(Boolean defaultSettingsInherited) {
    this.defaultSettingsInherited = defaultSettingsInherited;
  }

  public NumbersNumbers _default(Boolean _default) {
    this._default = _default;
    return this;
  }

   /**
   * Get _default
   * @return _default
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getDefault() {
    return _default;
  }

  public void setDefault(Boolean _default) {
    this._default = _default;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    NumbersNumbers numbersNumbers = (NumbersNumbers) o;
    return Objects.equals(this.id, numbersNumbers.id) &&
        Objects.equals(this.number, numbersNumbers.number) &&
        Objects.equals(this.tollfree, numbersNumbers.tollfree) &&
        Objects.equals(this.premium, numbersNumbers.premium) &&
        Objects.equals(this.custom, numbersNumbers.custom) &&
        Objects.equals(this.country, numbersNumbers.country) &&
        Objects.equals(this.countryName, numbersNumbers.countryName) &&
        Objects.equals(this.state, numbersNumbers.state) &&
        Objects.equals(this.city, numbersNumbers.city) &&
        Objects.equals(this.label, numbersNumbers.label) &&
        Objects.equals(this.defaultSettingsInherited, numbersNumbers.defaultSettingsInherited) &&
        Objects.equals(this._default, numbersNumbers._default);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, number, tollfree, premium, custom, country, countryName, state, city, label, defaultSettingsInherited, _default);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class NumbersNumbers {\n");
    
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    number: ").append(toIndentedString(number)).append("\n");
    sb.append("    tollfree: ").append(toIndentedString(tollfree)).append("\n");
    sb.append("    premium: ").append(toIndentedString(premium)).append("\n");
    sb.append("    custom: ").append(toIndentedString(custom)).append("\n");
    sb.append("    country: ").append(toIndentedString(country)).append("\n");
    sb.append("    countryName: ").append(toIndentedString(countryName)).append("\n");
    sb.append("    state: ").append(toIndentedString(state)).append("\n");
    sb.append("    city: ").append(toIndentedString(city)).append("\n");
    sb.append("    label: ").append(toIndentedString(label)).append("\n");
    sb.append("    defaultSettingsInherited: ").append(toIndentedString(defaultSettingsInherited)).append("\n");
    sb.append("    _default: ").append(toIndentedString(_default)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}

