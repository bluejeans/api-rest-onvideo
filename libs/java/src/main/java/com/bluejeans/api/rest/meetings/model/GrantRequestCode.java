/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;

/**
 * GrantRequestCode
 */

public class GrantRequestCode {
  /**
   * The type of access token you are requesting. Use \&quot;authorization_code\&quot;.
   */
  @JsonAdapter(GrantTypeEnum.Adapter.class)
  public enum GrantTypeEnum {
    AUTHORIZATION_CODE("authorization_code");

    private String value;

    GrantTypeEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static GrantTypeEnum fromValue(String text) {
      for (GrantTypeEnum b : GrantTypeEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<GrantTypeEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final GrantTypeEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public GrantTypeEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return GrantTypeEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("grant_type")
  private GrantTypeEnum grantType = GrantTypeEnum.AUTHORIZATION_CODE;

  @SerializedName("client_id")
  private String clientId = null;

  @SerializedName("client_secret")
  private String clientSecret = null;

  @SerializedName("redirectUri")
  private String redirectUri = null;

  @SerializedName("code")
  private String code = null;

  public GrantRequestCode grantType(GrantTypeEnum grantType) {
    this.grantType = grantType;
    return this;
  }

   /**
   * The type of access token you are requesting. Use \&quot;authorization_code\&quot;.
   * @return grantType
  **/
  @ApiModelProperty(value = "The type of access token you are requesting. Use \"authorization_code\".")
  public GrantTypeEnum getGrantType() {
    return grantType;
  }

  public void setGrantType(GrantTypeEnum grantType) {
    this.grantType = grantType;
  }

  public GrantRequestCode clientId(String clientId) {
    this.clientId = clientId;
    return this;
  }

   /**
   * The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string.
   * @return clientId
  **/
  @ApiModelProperty(value = "The client ID will be generated on creation of the application. Normally, a 32 character hexadecimal numeric string.")
  public String getClientId() {
    return clientId;
  }

  public void setClientId(String clientId) {
    this.clientId = clientId;
  }

  public GrantRequestCode clientSecret(String clientSecret) {
    this.clientSecret = clientSecret;
    return this;
  }

   /**
   * The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.
   * @return clientSecret
  **/
  @ApiModelProperty(value = "The client secret will be generated on creation of the application. Retain this value as it will only be revealed one time. If lost, you will need to regenerate.")
  public String getClientSecret() {
    return clientSecret;
  }

  public void setClientSecret(String clientSecret) {
    this.clientSecret = clientSecret;
  }

  public GrantRequestCode redirectUri(String redirectUri) {
    this.redirectUri = redirectUri;
    return this;
  }

   /**
   * One of the registered url or sub-url of registered urls.
   * @return redirectUri
  **/
  @ApiModelProperty(value = "One of the registered url or sub-url of registered urls.")
  public String getRedirectUri() {
    return redirectUri;
  }

  public void setRedirectUri(String redirectUri) {
    this.redirectUri = redirectUri;
  }

  public GrantRequestCode code(String code) {
    this.code = code;
    return this;
  }

   /**
   * Code obtained after /oauth2/authorize redirect.
   * @return code
  **/
  @ApiModelProperty(value = "Code obtained after /oauth2/authorize redirect.")
  public String getCode() {
    return code;
  }

  public void setCode(String code) {
    this.code = code;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    GrantRequestCode grantRequestCode = (GrantRequestCode) o;
    return Objects.equals(this.grantType, grantRequestCode.grantType) &&
        Objects.equals(this.clientId, grantRequestCode.clientId) &&
        Objects.equals(this.clientSecret, grantRequestCode.clientSecret) &&
        Objects.equals(this.redirectUri, grantRequestCode.redirectUri) &&
        Objects.equals(this.code, grantRequestCode.code);
  }

  @Override
  public int hashCode() {
    return Objects.hash(grantType, clientId, clientSecret, redirectUri, code);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class GrantRequestCode {\n");
    
    sb.append("    grantType: ").append(toIndentedString(grantType)).append("\n");
    sb.append("    clientId: ").append(toIndentedString(clientId)).append("\n");
    sb.append("    clientSecret: ").append(toIndentedString(clientSecret)).append("\n");
    sb.append("    redirectUri: ").append(toIndentedString(redirectUri)).append("\n");
    sb.append("    code: ").append(toIndentedString(code)).append("\n");
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

