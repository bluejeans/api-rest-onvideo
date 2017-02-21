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
import io.swagger.client.model.ContentContentPropertiesLevels;
import java.util.ArrayList;
import java.util.List;


/**
 * ContentContentProperties
 */
@javax.annotation.Generated(value = "class io.swagger.codegen.languages.JavaClientCodegen", date = "2017-02-21T14:43:18.826-07:00")
public class ContentContentProperties   {
  @SerializedName("duration")
  private Integer duration = null;

  @SerializedName("thumbnail")
  private String thumbnail = null;

  @SerializedName("thumbnailSprite")
  private String thumbnailSprite = null;

  @SerializedName("hdsUrl")
  private String hdsUrl = null;

  @SerializedName("thumbnailCount")
  private Integer thumbnailCount = null;

  @SerializedName("thumbnailWidth")
  private Integer thumbnailWidth = null;

  @SerializedName("thumbnailHeight")
  private Integer thumbnailHeight = null;

  @SerializedName("thumbnailInterval")
  private Integer thumbnailInterval = null;

  @SerializedName("hlsUrl")
  private String hlsUrl = null;

  @SerializedName("levels")
  private List<ContentContentPropertiesLevels> levels = new ArrayList<ContentContentPropertiesLevels>();

  public ContentContentProperties duration(Integer duration) {
    this.duration = duration;
    return this;
  }

   /**
   * Get duration
   * @return duration
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getDuration() {
    return duration;
  }

  public void setDuration(Integer duration) {
    this.duration = duration;
  }

  public ContentContentProperties thumbnail(String thumbnail) {
    this.thumbnail = thumbnail;
    return this;
  }

   /**
   * Get thumbnail
   * @return thumbnail
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getThumbnail() {
    return thumbnail;
  }

  public void setThumbnail(String thumbnail) {
    this.thumbnail = thumbnail;
  }

  public ContentContentProperties thumbnailSprite(String thumbnailSprite) {
    this.thumbnailSprite = thumbnailSprite;
    return this;
  }

   /**
   * Get thumbnailSprite
   * @return thumbnailSprite
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getThumbnailSprite() {
    return thumbnailSprite;
  }

  public void setThumbnailSprite(String thumbnailSprite) {
    this.thumbnailSprite = thumbnailSprite;
  }

  public ContentContentProperties hdsUrl(String hdsUrl) {
    this.hdsUrl = hdsUrl;
    return this;
  }

   /**
   * Get hdsUrl
   * @return hdsUrl
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getHdsUrl() {
    return hdsUrl;
  }

  public void setHdsUrl(String hdsUrl) {
    this.hdsUrl = hdsUrl;
  }

  public ContentContentProperties thumbnailCount(Integer thumbnailCount) {
    this.thumbnailCount = thumbnailCount;
    return this;
  }

   /**
   * Get thumbnailCount
   * @return thumbnailCount
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getThumbnailCount() {
    return thumbnailCount;
  }

  public void setThumbnailCount(Integer thumbnailCount) {
    this.thumbnailCount = thumbnailCount;
  }

  public ContentContentProperties thumbnailWidth(Integer thumbnailWidth) {
    this.thumbnailWidth = thumbnailWidth;
    return this;
  }

   /**
   * Get thumbnailWidth
   * @return thumbnailWidth
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getThumbnailWidth() {
    return thumbnailWidth;
  }

  public void setThumbnailWidth(Integer thumbnailWidth) {
    this.thumbnailWidth = thumbnailWidth;
  }

  public ContentContentProperties thumbnailHeight(Integer thumbnailHeight) {
    this.thumbnailHeight = thumbnailHeight;
    return this;
  }

   /**
   * Get thumbnailHeight
   * @return thumbnailHeight
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getThumbnailHeight() {
    return thumbnailHeight;
  }

  public void setThumbnailHeight(Integer thumbnailHeight) {
    this.thumbnailHeight = thumbnailHeight;
  }

  public ContentContentProperties thumbnailInterval(Integer thumbnailInterval) {
    this.thumbnailInterval = thumbnailInterval;
    return this;
  }

   /**
   * Get thumbnailInterval
   * @return thumbnailInterval
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getThumbnailInterval() {
    return thumbnailInterval;
  }

  public void setThumbnailInterval(Integer thumbnailInterval) {
    this.thumbnailInterval = thumbnailInterval;
  }

  public ContentContentProperties hlsUrl(String hlsUrl) {
    this.hlsUrl = hlsUrl;
    return this;
  }

   /**
   * Get hlsUrl
   * @return hlsUrl
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getHlsUrl() {
    return hlsUrl;
  }

  public void setHlsUrl(String hlsUrl) {
    this.hlsUrl = hlsUrl;
  }

  public ContentContentProperties levels(List<ContentContentPropertiesLevels> levels) {
    this.levels = levels;
    return this;
  }

  public ContentContentProperties addLevelsItem(ContentContentPropertiesLevels levelsItem) {
    this.levels.add(levelsItem);
    return this;
  }

   /**
   * Get levels
   * @return levels
  **/
  @ApiModelProperty(example = "null", value = "")
  public List<ContentContentPropertiesLevels> getLevels() {
    return levels;
  }

  public void setLevels(List<ContentContentPropertiesLevels> levels) {
    this.levels = levels;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    ContentContentProperties contentContentProperties = (ContentContentProperties) o;
    return Objects.equals(this.duration, contentContentProperties.duration) &&
        Objects.equals(this.thumbnail, contentContentProperties.thumbnail) &&
        Objects.equals(this.thumbnailSprite, contentContentProperties.thumbnailSprite) &&
        Objects.equals(this.hdsUrl, contentContentProperties.hdsUrl) &&
        Objects.equals(this.thumbnailCount, contentContentProperties.thumbnailCount) &&
        Objects.equals(this.thumbnailWidth, contentContentProperties.thumbnailWidth) &&
        Objects.equals(this.thumbnailHeight, contentContentProperties.thumbnailHeight) &&
        Objects.equals(this.thumbnailInterval, contentContentProperties.thumbnailInterval) &&
        Objects.equals(this.hlsUrl, contentContentProperties.hlsUrl) &&
        Objects.equals(this.levels, contentContentProperties.levels);
  }

  @Override
  public int hashCode() {
    return Objects.hash(duration, thumbnail, thumbnailSprite, hdsUrl, thumbnailCount, thumbnailWidth, thumbnailHeight, thumbnailInterval, hlsUrl, levels);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class ContentContentProperties {\n");
    
    sb.append("    duration: ").append(toIndentedString(duration)).append("\n");
    sb.append("    thumbnail: ").append(toIndentedString(thumbnail)).append("\n");
    sb.append("    thumbnailSprite: ").append(toIndentedString(thumbnailSprite)).append("\n");
    sb.append("    hdsUrl: ").append(toIndentedString(hdsUrl)).append("\n");
    sb.append("    thumbnailCount: ").append(toIndentedString(thumbnailCount)).append("\n");
    sb.append("    thumbnailWidth: ").append(toIndentedString(thumbnailWidth)).append("\n");
    sb.append("    thumbnailHeight: ").append(toIndentedString(thumbnailHeight)).append("\n");
    sb.append("    thumbnailInterval: ").append(toIndentedString(thumbnailInterval)).append("\n");
    sb.append("    hlsUrl: ").append(toIndentedString(hlsUrl)).append("\n");
    sb.append("    levels: ").append(toIndentedString(levels)).append("\n");
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

